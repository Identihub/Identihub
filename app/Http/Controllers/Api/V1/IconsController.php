<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Events\BridgeUpdated;
use App\Http\Requests\CreateConvertedIcon;
use App\Http\Requests\IconStoreRequest;
use App\Icon;
use App\Repositories\IconRepository;
use App\SectionType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class IconsController extends Controller
{

    private $iconRepo;

    public function __construct(IconRepository $iconRepo)
    {
        parent::__construct();
        $this->iconRepo = $iconRepo;
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
            $format = $request->get('format');

            $path = $this->iconRepo->generateIconConverted($bridge, $icon, $width, $height, $format);

            return response()->json([
                'download_url' => url($path),
                'filename'     => basename($path),
            ]);

        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: ' . $e->getMessage()]);
        }
    }

    /**
     * Update background color of the icon.
     *
     * @param Bridge  $bridge
     * @param Icon    $icon
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function updateBgColor(Bridge $bridge, Icon $icon, Request $request)
    {
        $this->validate($request, [
            'color' => 'required',
        ], [
            'color.required' => "Color must be specified.",
        ]);

        $this->authorize('update', $icon);

        try {
            $color = $request->get('color');

            $icon->bg_color = $color;
            $icon->save();

            return $this->simple_json(true, "Asset background color updated successfully.");

        } catch (\Exception $e) {
            return $this->simple_json(false, 'Server error: ' . $e->getMessage());
        }
    }

    /**
     * Store Icon.
     *
     * @param IconStoreRequest $request
     * @param Bridge           $bridge
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \ImagickException
     */
    public function storeIcon(IconStoreRequest $request, Bridge $bridge)
    {
        $this->authorize('update', $bridge);

        $sectionType = SectionType::where('name', SectionType::ICONS)->first();

        foreach ($request->icons as $icon) {
            if ($icon->getClientMimeType() !== 'image/svg+xml') {
                return $this->simple_json(false, "File type no allowed. Icon should be SVG.");
            }

            $im = new \Imagick();
            $im->setBackgroundColor(new \ImagickPixel('transparent'));
            $im->readImageBlob(file_get_contents($icon->getRealPath()));
            $im->setImageFormat('png32');
            $im->resizeImage($im->getImageWidth(), $im->getImageHeight(), \Imagick::FILTER_LANCZOS, 1);

            $filenameIcon = str_replace(' ', '', $bridge->name) . '_' . $sectionType->name . '_' . ++$bridge->nr_icons . '.svg';
            $icon->storeAs('', $filenameIcon, 'assets');

            // Store converted file and png file.
            $filenameConverted = str_replace(' ', '', $bridge->name) . '_' . $sectionType->name . '_' . ++$bridge->nr_icons . '.png';
            $iconAsPng = $filenameIcon . '.png';
            Storage::disk('assets')->put($filenameConverted, $im->getImageBlob());
            Storage::disk('assets')->put($iconAsPng, $im->getImageBlob());

            $section = $bridge->sections()->where('section_type_id', $sectionType->id)->first();

            $order = $bridge->icons()->where('section_id', $section->id)->count();
            $storedIcon = $bridge->icons()->create([
                'filename'     => $filenameIcon,
                'filename_png' => $iconAsPng,
                'width_ratio'  => $im->getImageWidth() / $im->getImageHeight(),
                'section_id'   => $section->id,
                'order'        => ++$order,
            ]);

            $storedIcon->converted()->create([
                'filename' => $filenameConverted,
                'width'    => $im->getImageWidth(),
                'height'   => $im->getImageHeight(),
            ]);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $ex) {

            }
        }

        $bridge = Bridge::with(Bridge::WITH_RELATIONS)->findOrFail($bridge->id);

        return response()->json([
            'bridge'        => $bridge,
            'section_types' => SectionType::all(),
        ]);
    }

    /**
     * Update Icon File.
     *
     * @param Bridge  $bridge
     * @param Icon    $icon
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \ImagickException
     */
    public function updateIconFile(Bridge $bridge, Icon $icon, Request $request)
    {
        $this->authorize('update', $bridge);
        $this->authorize('update', $icon);

        if ($request->file('icon')->getClientMimeType() !== 'image/svg+xml') {
            return $this->simple_json(false, "File type no allowed. Icon should be SVG.");
        }

        $im = new \Imagick();
        $im->setBackgroundColor(new \ImagickPixel('transparent'));
        $im->readImageBlob(file_get_contents($request->file('icon')->getRealPath()));
        $im->setImageFormat('png32');
        $im->resizeImage($im->getImageWidth(), $im->getImageHeight(), \Imagick::FILTER_LANCZOS, 1);

        $request->file('icon')->storeAs('', $icon->filename, 'assets');

        \Storage::disk('assets')->put($icon->filename_png, $im->getImageBlob());

        $icon->width_ratio = $im->getImageWidth() / $im->getImageHeight();
        $icon->save();

        $bridge = Bridge::with(Bridge::WITH_RELATIONS)->findOrFail($bridge->id);

        try {
            event(new BridgeUpdated($bridge));
        } catch (\Exception $ex) {

        }

        return response()->json([
            'bridge'        => $bridge,
            'section_types' => SectionType::all(),
        ]);
    }

    /**
     * Update dont-use flag for the specified icon.
     *
     * @param Bridge  $bridge
     * @param Icon    $icon
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function updateDontUseFlag(Bridge $bridge, Icon $icon, Request $request)
    {
        $this->authorize('update', $bridge);
        $this->authorize('update', $icon);

        $this->validate($request, [
            'dont_use' => 'required',
        ]);

        $icon->dont_use = $request->dont_use ? true : false;
        $icon->save();

        $bridge = Bridge::with(Bridge::WITH_RELATIONS)->findOrFail($bridge->id);

        try {
            event(new BridgeUpdated($bridge));
        } catch (\Exception $ex) {

        }

        return response()->json([
            'bridge'        => $bridge,
            'section_types' => SectionType::all(),
        ]);
    }

    /**
     * Update featured thumbnail.
     *
     * @param Bridge  $bridge
     * @param Icon    $icon
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function updateFeaturedThumbnail(Bridge $bridge, Icon $icon, Request $request)
    {
        $this->authorize('update', $bridge);
        $this->authorize('update', $icon);

        $this->validate($request, [
            'is_featured' => 'required',
        ]);

        $bridge->icon_id = $request->is_featured ? $icon->id : null;
        $bridge->save();

        // TODO: This need to be updated
        $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridge->id);

        try {
            event(new BridgeUpdated($bridge));
        } catch (\Exception $ex) {

        }

        return response()->json([
            'bridge'        => $bridge,
            'section_types' => SectionType::all(),
        ]);
    }
}
