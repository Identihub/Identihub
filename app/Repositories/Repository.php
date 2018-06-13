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
            $xml->addAttribute('viewBox', "0 0 ".$attr->width." ".$attr->height);
        }

        $xml->attributes()->width = $width;
        $xml->attributes()->height = $height;

        return $xml->asXML();
    }
}