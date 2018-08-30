<?php

namespace App\Repositories;


class Repository
{
    /**
     * Add view box and scale svg.
     *
     * @param $svgData
     * @param $width
     * @param $height
     * @return mixed
     */
    protected function addViewBoxAndScaleSvg($svgData, $width, $height)
    {
        $xml = simplexml_load_string($svgData);

        $attr = $xml->attributes();

        if (strpos($svgData, "viewBox") == false) {
            $xml->addAttribute('viewBox', "0 0 " . $width . " " . $height);
        } else {
            $xml->attributes()->viewBox = "0 0 " . $width . " " . $height;
        }

        if (strpos($svgData, "style") == false) {
            $xml->addAttribute('style', "enable-background:new 0 0 $width $height;");
        } else {
            $xml->attributes()->style = "enable-background:new 0 0 $width $height;";
        }

        if (strpos($svgData, "width") == false) {
            $xml->addAttribute('width', $width);
        } else {
            $xml->attributes()->width = $width;
        }

        if (strpos($svgData, "height") == false) {
            $xml->addAttribute('height', $height);
        } else {
            $xml->attributes()->height = $height;
        }

        return $xml->asXML();
    }
}