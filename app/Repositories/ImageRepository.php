<?php

namespace App\Repositories;

use App\Bridge;
use App\Image;
use App\ImageConverted;
use App\SectionType;
use Illuminate\Support\Facades\Storage;
use Imagick;
use ImagickPixel;

class ImageRepository extends Repository
{

    /**
     * Generate image converted with custom sizes.
     *
     * @param Bridge $bridge
     * @param Image  $image
     * @param        $width
     * @param        $height
     * @param        $format
     * @return string
     * @throws \ImagickException
     */
    public function generateImageConverted(Bridge $bridge, Image $image, $width, $height, $format)
    {
        if ($format === 'jpg') {
            $imageExt = 'jpg';
            $imageType = 'jpeg';
        } else {
            $imageExt = 'png';
            $imageType = 'png32';
        }

        $im = new Imagick();

        $im->setBackgroundColor(new ImagickPixel('transparent'));
        $im->readImageBlob(Storage::disk('assets')->get($image->filename));
        $im->setImageFormat($imageType);
        $im->resizeImage($width, $width / $image->width_ratio, Imagick::FILTER_LANCZOS, 1);

        $sectionType = SectionType::where('name', SectionType::IMAGES)->get()->first();

        $filenameConverted = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_converted_'.$image->id.'-'.$width.'x'.$height.'.'.$imageExt;

        ImageConverted::create([
            'image_id'          => $image->id,
            'filename'          => $filenameConverted,
            'width'             => $im->getImageWidth(),
            'height'            => $im->getImageHeight(),
            'is_visitor_custom' => 1,
        ]);

        Storage::disk('assets')->put($filenameConverted, $im->getImageBlob());

        $im->clear();
        $im->destroy();

        return "/assets/$filenameConverted";
    }

}