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
     * @return string
     * @throws \ImagickException
     */
    public function generateIconConverted(Bridge $bridge, Icon $icon, $width, $height)
    {
        $im = new Imagick();
        $svgData = Storage::disk('assets')->get($icon->filename);
        $svgData = $this->addViewBoxAndScaleSvg($svgData, $width, $height);

        $im->setBackgroundColor(new ImagickPixel('transparent'));
        $im->readImageBlob($svgData);
        $im->setImageResolution(1536, 1536);
        $im->resizeImage($width, $width / $icon->width_ratio, \Imagick::FILTER_LANCZOS, 1);
        $im->setImageFormat('png32');

        $sectionType = SectionType::where('name', SectionType::ICONS)->first();

        $filenameConverted = str_replace(' ', '', $bridge->name).'_'.$sectionType->name.'_converted_'.++$bridge->nr_icons
            .'-'.$width.'x'.$height.'.png';

        IconConverted::create([
            'icon_id'  => $icon->id,
            'filename' => $filenameConverted,
            'width'    => $im->getImageWidth(),
            'height'   => $im->getImageHeight(),
        ]);

        Storage::disk('assets')->put($filenameConverted, $im->getImageBlob());

        $im->clear();
        $im->destroy();

        return "/assets/$filenameConverted";
    }
}