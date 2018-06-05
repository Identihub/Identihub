<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Events\BridgeUpdated;
use App\Exceptions\IconShouldBeSVG;
use App\Exceptions\ImageShouldBePNGOrJPG;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConvertedStoreRequest;
use App\Http\Requests\CreateConvertedIcon;
use App\Http\Requests\IconStoreRequest;
use App\Icon;
use App\IconConverted;
use App\Image;
use App\ImageConverted;
use App\Jobs\ReorderAfterDelete;
use App\Repositories\IconRepository;
use App\Repositories\ImageRepository;
use App\Section;
use App\SectionType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SourceFileController extends Controller
{
    private $iconRepo;
    private $imageRepo;

    public function __construct(IconRepository $iconRepo, ImageRepository $imageRepo)
    {
        $this->iconRepo = $iconRepo;
        $this->imageRepo = $imageRepo;
    }

    public function storeIcon(IconStoreRequest $request, $bridgeId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            foreach ($request->icons as $icon) {
                if ($icon->getClientMimeType() !== 'image/svg+xml') {
                    throw new IconShouldBeSVG();
                }

                $im = new \Imagick();
                $im->setBackgroundColor(new \ImagickPixel('transparent'));
                $im->readImageBlob(file_get_contents($icon->getRealPath()));
                $im->setImageFormat('png32');
                $im->resizeImage($im->getImageWidth(), $im->getImageHeight(), \Imagick::FILTER_LANCZOS, 1);

                $sectionType = SectionType::where('name', SectionType::ICONS)->get()->first();
                $filenameIcon = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_'.++$bridge->nr_icons.'.svg';

                $icon->storeAs('', $filenameIcon, 'assets');

                $sectionType = SectionType::where('name', SectionType::ICONS)->get()->first();
                $filenameConverted = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_'.++$bridge->nr_icons.'.png';

                $iconAsPng = $filenameIcon.'.png';

                \Storage::disk('assets')->put($filenameConverted, $im->getImageBlob());
                \Storage::disk('assets')->put($iconAsPng, $im->getImageBlob());
                $section = Section::where('section_type_id', $sectionType->id)->where('bridge_id', $bridgeId)->first();
                $imageicon = Icon::create([
                    'bridge_id'    => $bridgeId,
                    'filename'     => $filenameIcon,
                    'filename_png' => $iconAsPng,
                    'width_ratio'  => $im->getImageWidth() / $im->getImageHeight(),
                    'section_id'   => $section->id,
                    'order'        => Icon::where('section_id', $section->id)->where('bridge_id', $bridgeId)->get()->count(),
                ]);

                IconConverted::create([
                    'icon_id'  => $imageicon->id,
                    'filename' => $filenameConverted,
                    'width'    => $im->getImageWidth(),
                    'height'   => $im->getImageHeight(),
                ]);

                $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
                try {
                    event(new BridgeUpdated($bridge));
                } catch (\Exception $e) {
                }
            }

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (IconShouldBeSVG $e) {
            return response()->json(['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    public function updateIconFile(Request $request, $bridgeId, $iconId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            if ($request->file('icon')->getClientMimeType() !== 'image/svg+xml') {
                throw new IconShouldBeSVG();
            }

            $im = new \Imagick();
            $im->readImageBlob(file_get_contents($request->file('icon')->getRealPath()));
            $im->setImageFormat('png32');

            $sectionType = SectionType::where('name', SectionType::ICONS)->get()->first();
            $filenameIcon = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_'.++$bridge->nr_icons.'.svg';
            $request->file('icon')->storeAs('', $filenameIcon, 'assets');

            $iconAsPng = $filenameIcon.'.png';
            \Storage::disk('assets')->put($iconAsPng, $im->getImageBlob());

            $icon = Icon::findOrFail($iconId);
            $icon->filename = $filenameIcon;
            $icon->filename_png = $iconAsPng;
            $icon->width_ratio = $im->getImageWidth() / $im->getImageHeight();
            $icon->save();


            $this->updateConvertedIcons($icon);
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    private function updateConvertedIcons(Icon $icon)
    {
        foreach ($icon->converted as $converted) {
            $width = (int) $converted->width;
            $im = new \Imagick();
            $im->setBackgroundColor(new \ImagickPixel('transparent'));
            $im->readImageBlob(\Storage::disk('assets')->get($icon->filename));
            $im->setImageFormat('png32');
            $im->resizeImage($width, $width / $icon->width_ratio, \Imagick::FILTER_LANCZOS, 1);

            $converted->width = $im->getImageWidth();
            $converted->height = $im->getImageHeight();
            $converted->save();
            \Storage::disk('assets')->put($converted->filename, $im->getImageBlob());
        }
    }

    public function storeImage(Request $request, $bridgeId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            $user = Auth::user();
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            foreach ($request->images as $image) {
                if (!($image->getClientMimeType() === 'image/jpeg' || $image->getClientMimeType() === 'image/png')) {
                    throw new ImageShouldBePNGOrJPG();
                }

                if ($image->getClientMimeType() === 'image/jpeg') {
                    $imageExt = 'jpg';
                    $imageType = 'jpeg';
                } else {
                    $imageExt = 'png';
                    $imageType = 'png32';
                }

                $im = new \Imagick();
                $im->setBackgroundColor(new \ImagickPixel('transparent'));
                $im->readImageBlob(file_get_contents($image->getRealPath()));
                $im->setImageFormat($imageType);
                $im->resizeImage($im->getImageWidth(), $im->getImageHeight(), \Imagick::FILTER_LANCZOS, 1);

                $sectionType = SectionType::where('name', SectionType::IMAGES)->get()->first();
                $section = Section::where('section_type_id', $sectionType->id)->where('bridge_id', $bridgeId)->get()->first();

                $filenameImage = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_'.++$bridge->nr_images.'.'.$imageExt;
                $image->storeAs('', $filenameImage, 'assets');

                $filenameConverted = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_converted_'.++$bridge->nr_images.'.'.$imageExt;
                \Storage::disk('assets')->put($filenameConverted, $im->getImageBlob());

                $image = Image::create([
                    'bridge_id'   => $bridgeId,
                    'filename'    => $filenameImage,
                    'width_ratio' => $im->getImageWidth() / $im->getImageHeight(),
                    'section_id'  => $section->id,
                    'order'       => Image::where('section_id', $section->id)->where('bridge_id', $bridgeId)->get()->count(),
                ]);

                ImageConverted::create([
                    'image_id' => $image->id,
                    'filename' => $filenameConverted,
                    'width'    => $im->getImageWidth(),
                    'height'   => $im->getImageHeight(),
                ]);

                $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
                try {
                    event(new BridgeUpdated($bridge));
                } catch (\Exception $e) {
                }
            }

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    private function addViewBoxAndScaleSvg($svgdata, $width, $height)
    {
        $xml = simplexml_load_string($svgdata);
        $attr = $xml->attributes();

        if (strpos($svgdata, "viewBox") == false) {
            $xml->addAttribute('viewBox', "0 0 ".$attr->width." ".$attr->height);
        }

        $xml->attributes()->width = $width;
        $xml->attributes()->height = $height;

        return $xml->asXML();
    }

    public function addIconConverted(CreateConvertedIcon $request, $bridgeId, $iconId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            $icon = Icon::findOrFail($iconId);
            $width = (int) $request->get('width');
            $height = (int) ($width / $icon->width_ratio);

            $im = new \Imagick();
            $svgdata = \Storage::disk('assets')->get($icon->filename);
            $svgdata = $this->addViewBoxAndScaleSvg($svgdata, $width, $height);

            $im->setBackgroundColor(new \ImagickPixel('transparent'));
            $im->readImageBlob($svgdata);
            $im->setImageResolution(1536, 1536);
            $im->setImageFormat('png32');

            $sectionType = SectionType::where('name', SectionType::ICONS)->get()->first();
            $filenameConverted = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_converted_'.++$bridge->nr_icons
                .'-'.$width.'x'.$height.'.png';
            IconConverted::create([
                'icon_id'  => $icon->id,
                'filename' => $filenameConverted,
                'width'    => $im->getImageWidth(),
                'height'   => $im->getImageHeight(),
            ]);
            \Storage::disk('assets')->put($filenameConverted, $im->getImageBlob());
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);

            $im->clear();
            $im->destroy();

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    /**
     * Serve the generated icon publicly.
     *
     * @param CreateConvertedIcon $request
     * @param Bridge              $bridge
     * @param Icon                $icon
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function customSizeIconConverted(CreateConvertedIcon $request, Bridge $bridge, Icon $icon)
    {
        try {
            $width = (int) $request->get('width');
            $height = (int) ($width / $icon->width_ratio);

            $path = $this->iconRepo->generateIconConverted($bridge, $icon, $width, $height);

            return response()->json([
                'download_url' => url($path),
                'filename'     => basename($path),
            ]);

        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    public function addImageConverted(ConvertedStoreRequest $request, $bridgeId, $imageId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            $format = $request->get('format');

            if ($format === 'jpg') {
                $imageExt = 'jpg';
                $imageType = 'jpeg';
            } else {
                $imageExt = 'png';
                $imageType = 'png32';
            }

            $image = Image::findOrFail($imageId);
            $im = new \Imagick();
            $width = (int) $request->get('width');

            $im->setBackgroundColor(new \ImagickPixel('transparent'));
            $im->readImageBlob(\Storage::disk('assets')->get($image->filename));
            $im->setImageFormat($imageType);
            $im->resizeImage($width, $width / $image->width_ratio, \Imagick::FILTER_LANCZOS, 1);

            $sectionType = SectionType::where('name', SectionType::IMAGES)->get()->first();
            $filenameConverted = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_converted_'.++$bridge->nr_images.'.'.$imageExt;

            ImageConverted::create([
                'image_id' => $image->id,
                'filename' => $filenameConverted,
                'width'    => $im->getImageWidth(),
                'height'   => $im->getImageHeight(),
            ]);
            \Storage::disk('assets')->put($filenameConverted, $im->getImageBlob());

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    /**
     * Serve the generated image publicly.
     *
     * @param ConvertedStoreRequest $request
     * @param Bridge                $bridge
     * @param Image                 $image
     * @return \Illuminate\Http\JsonResponse
     */
    public function customSizeImageConverted(ConvertedStoreRequest $request, Bridge $bridge, Image $image)
    {
        try {
            $width = (int) $request->get('width');
            $height = (int) ($width / $image->width_ratio);

            $path = $this->imageRepo->generateImageConverted($bridge, $image, $width, $height, $request->get('format'));

            return response()->json([
                'download_url' => url($path),
                'filename'     => basename($path),
            ]);

        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    public function deleteIcon(Request $request, $bridgeId, $iconId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            $icon = Icon::findOrFail($iconId);
            $sectionId = $icon->section_id;
            $icon->delete();

            $icons = Icon::where('section_id', $sectionId)->get();

            (new ReorderAfterDelete($icons))->handle();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    public function deleteImage(Request $request, $bridgeId, $imageId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            $image = Image::findOrFail($imageId);
            $sectionId = $image->section_id;
            $image->delete();

            $images = Image::where('section_id', $sectionId)->get();

            (new ReorderAfterDelete($images))->handle();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    public function updateImageFile(Request $request, $bridgeId, $imageId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id) {
                throw new ModelNotFoundException();
            }

            $image = $request->file('image');
            if (!($image->getClientMimeType() === 'image/jpeg' || $image->getClientMimeType() === 'image/png')) {
                throw new ImageShouldBePNGOrJPG();
            }

            if ($image->getClientMimeType() === 'image/jpeg') {
                $imageExt = 'jpg';
                $imageType = 'jpeg';
            } else {
                $imageExt = 'png';
                $imageType = 'png32';
            }

            $im = new \Imagick();
            $im->readImageBlob(file_get_contents($request->file('image')->getRealPath()));
            $im->setImageFormat($imageType);

            $sectionType = SectionType::where('name', SectionType::IMAGES)->get()->first();
            $filenameIcon = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_'.++$bridge->nr_images.'.'.$imageExt;

            $request->file('image')->storeAs('', $filenameIcon, 'assets');

            $image = Image::findOrFail($imageId);
            $image->filename = $filenameIcon;
            $image->width_ratio = $im->getImageWidth() / $im->getImageHeight();
            $image->save();

            $this->updateConvertedImages($image);

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: '.$e->getMessage()]);
        }
    }

    private function updateConvertedImages(Image $image)
    {
        foreach ($image->converted as $converted) {
            $width = (int) $converted->width;
            $parsedString = explode('.', $converted->filename);

            if (end($parsedString) === 'png') {
                $imageType = 'png32';
            } else {
                $imageType = 'jpeg';
            }

            $im = new \Imagick();
            $im->setBackgroundColor(new \ImagickPixel('transparent'));
            $im->readImageBlob(\Storage::disk('assets')->get($image->filename));
            $im->setImageFormat($imageType);
            $im->resizeImage($width, $width / $image->width_ratio, \Imagick::FILTER_LANCZOS, 1);

            $converted->width = $im->getImageWidth();
            $converted->height = $im->getImageHeight();
            $converted->save();
            \Storage::disk('assets')->put($converted->filename, $im->getImageBlob());
        }
    }
}
