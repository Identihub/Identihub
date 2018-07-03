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
     * Generate image converted with custom sizes, and format.
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
        $im = new Imagick();
        $imgData = Storage::disk('assets')->get($image->filename);

        switch ($format) {
            case 'png':

                $im->setBackgroundColor(new ImagickPixel('transparent'));
                $im->readImageBlob($imgData);
                $im->setImageFormat('png32');

                break;
            case 'jpg':

                $im->setBackgroundColor(new ImagickPixel('#FFFFFF'));
                $im->readImageBlob($imgData);
                $im->setImageFormat('jpg');

                break;
        }

        $im->resizeImage($width, $width / $image->width_ratio, \Imagick::FILTER_LANCZOS, 1);

        $sectionType = SectionType::where('name', SectionType::IMAGES)->first();

        $filenameConverted = str_replace(' ', '', $bridge->name) . '_' . "{$sectionType->name}_converted_{$image->id}-{$width}x{$height}.{$format}";

        ImageConverted::create([
            'image_id'          => $image->id,
            'filename'          => $filenameConverted,
            'width'             => $im->getImageWidth(),
            'height'            => $im->getImageHeight(),
            'is_visitor_custom' => 1,
            'format'            => $format,
        ]);

        Storage::disk('assets')->put($filenameConverted, $im->getImageBlob());

        $im->clear();
        $im->destroy();

        return "/assets/$filenameConverted";
    }

}