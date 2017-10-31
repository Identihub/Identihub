<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionType extends Model
{
    const ICONS = "ICONS";
    const FONTS = "FONTS";
    const IMAGES = "IMAGES";
    const COLORS = "COLORS";

    protected $table = 'section_types';
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    /**
     * @return SectionType
     */
    public static function getIconsSectionType()
    {
        return self::getSectionType(self::ICONS);
    }

    /**
     * @return SectionType
     */
    public static function getImagesSectionType()
    {
        return self::getSectionType(self::IMAGES);
    }

    /**
     * @return SectionType
     */
    public static function getFontsSectionType()
    {
        return self::getSectionType(self::FONTS);
    }

    /**
     * @return SectionType
     */
    public static function getColorsSectionType()
    {
        return self::getSectionType(self::COLORS);
    }

    /**
     * @param string $name
     * @return SectionType
     */
    public static function getSectionType($name)
    {
        return SectionType::where('name', $name)->get()->first();
    }
}
