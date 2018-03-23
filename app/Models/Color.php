<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    protected $fillable = [
        'hex', 'rgb', 'cmyk', 'section_id', 'order', 'bridge_id'
    ];

    public function save(array $options = [])
    {
        // before save code

        parent::save();
        // after save code
        Bridge::whereId($this->bridge_id)->increment('nr_colors');
    }

    public function update(array $attributes = [], array $options = [])
    {
        // before save code

        parent::update();
        // after save code
        Bridge::whereId($this->bridge_id)->increment('nr_colors');
    }

    public static function parseFromSwatchContents($swatchContents)
    {
        $rows = explode("\n", $swatchContents);
        array_shift($rows);
        array_shift($rows);
        array_shift($rows);
        array_shift($rows);
        array_pop($rows);

        $colors = [];

        foreach ($rows as $row) {
            $local = ['rgb' => '', 'hex' => '', 'cmyk' => ''];

            $local['rgb'] = explode("  ", $row)[0];
            $local['hex'] = static::rgb2Hex($local['rgb']);
            $local['cmyk'] = static::rgb2Cmyk($local['rgb']);
            $colors[] = $local;
        }

        return collect($colors);
    }

    private static function rgb2Hex($rgb)
    {
        list($r, $g, $b) = explode(" ", $rgb);

        $r = dechex($r);
        if (strlen($r)<2) {
            $r = '0'.$r;
        }

        $g = dechex($g);
        if (strlen($g)<2) {
            $g = '0'.$g;
        }

        $b = dechex($b);
        if (strlen($b)<2) {
            $b = '0'.$b;
        }

        return strtoupper($r . $g . $b);
    }

    public static function rgb2Cmyk($rgb)
    {
        list($r, $g, $b) = explode(" ", $rgb);

        $cyan    = 255 - $r;
        $magenta = 255 - $g;
        $yellow  = 255 - $b;
        $black   = min($cyan, $magenta, $yellow);
        $cyan    = @(($cyan    - $black) / (255 - $black)) * 255;
        $magenta = @(($magenta - $black) / (255 - $black)) * 255;
        $yellow  = @(($yellow  - $black) / (255 - $black)) * 255;
        return round(($cyan / 255) * 100)
        . ' ' . round(($magenta / 255) * 100)
        . ' ' . round(($yellow / 255) * 100)
        . ' ' . round(($black / 255) * 100);
    }
}
