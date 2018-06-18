<?php

namespace App\Repositories;

use App\Bridge;
use App\Icon;
use App\IconConverted;
use App\SectionType;
use Illuminate\Support\Facades\Storage;
use Imagick;
use ImagickPixel;

class IconRepository extends Repository
{

    /**
     * Generate icon converted and return path.
     *
     * @param Bridge $bridge
     * @param Icon   $icon
     * @param        $width
     * @param        $height
     * @param string $format
     * @return string
     * @throws \ImagickException
     */
    public function generateIconConverted(Bridge $bridge, Icon $icon, $width, $height, $format = 'png')
    {
        $im = new Imagick();
        $svgData = Storage::disk('assets')->get($icon->filename);
        $svgData = $this->addViewBoxAndScaleSvg($svgData, $width, $height);

        switch ($format) {
            case 'png':

                $im->setBackgroundColor(new ImagickPixel('transparent'));
                $im->readImageBlob($svgData);
                $im->setImageFormat('png32');

                break;
            case 'jpg':

                $im->setBackgroundColor(new ImagickPixel('#FFFFFF'));
                $im->readImageBlob($svgData);
                $im->setImageFormat('jpg');

                break;
        }

        $im->setImageResolution(1536, 1536);
        $im->resizeImage($width, $width / $icon->width_ratio, \Imagick::FILTER_LANCZOS, 1);

        $sectionType = SectionType::where('name', SectionType::ICONS)->first();

        $filenameConverted = str_replace(' ', '', $bridge->name) . '_' . "{$sectionType->name}_converted_{$icon->id}-{$width}x{$height}.{$format}";

        IconConverted::create([
            'icon_id'           => $icon->id,
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