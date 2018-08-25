<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
    const WITH_RELATIONS = ['sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors', 'writings'];

    protected $fillable = [
        'name', 'icon_id', 'user_id', 'slug', 'nr_images', 'nr_icons', 'nr_fonts', 'nr_colors',
    ];

    protected $appends = ['thumbnail', 'has_thumbnail'];

    /**
     * Get thumbnail attribute.
     */
    public function getThumbnailAttribute()
    {
        if ($this->icon) {
            return "/assets/{$this->icon->filename_png}";
        } else if ($this->icons()->count()) {
            $icon = $this->icons()->first();
            return "/assets/{$icon->filename_png}";
        } else {
            return "/images/logo.svg";
        }
    }

    /**
     * Check if has a thumbnail or not.
     */
    public function getHasThumbnailAttribute()
    {
        if ($this->icon) {
            return true;
        } else if ($this->icons()->count()) {
            return true;
        }

        return false;
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Scope a query to only include users of a given type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param User                                  $user
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFromUser($query, User $user)
    {
        return $query->where('user_id', $user->id);
    }

    public function sections()
    {
        return $this->hasMany(Section::class, 'bridge_id', 'id');
    }

    public function iconSections(Collection $collection)
    {
        return $this->getSectionsFromType($collection, SectionType::ICONS);
    }

    public function fontSections(Collection $collection)
    {
        return $this->getSectionsFromType($collection, SectionType::FONTS);
    }

    public function imageSections(Collection $collection)
    {
        return $this->getSectionsFromType($collection, SectionType::IMAGES);
    }

    public function colorsSections(Collection $collection)
    {
        return $this->getSectionsFromType($collection, SectionType::COLORS);
    }

    public function writingsSections(Collection $collection)
    {
        return $this->getSectionsFromType($collection, SectionType::WRITINGS);
    }

    public function getSectionsFromType(Collection $collection, $type)
    {
        $sectionType = SectionType::where('name', $type)->get()->first();
        return $collection->filter(function ($value, $key) use ($sectionType) {
            return $value->section_type_id === $sectionType->id;
        });
    }

    public function getSectionsFromTypeModel(Collection $collection, $type)
    {
        return $collection->filter(function ($value, $key) use ($type) {
            return $value->section_type_id === $type->id;
        });
    }

    public function icons()
    {
        return $this->hasMany(Icon::class, 'bridge_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'bridge_id', 'id');
    }

    public function fonts()
    {
        return $this->hasMany(Font::class, 'bridge_id', 'id');
    }

    public function colors()
    {
        return $this->hasMany(Color::class, 'bridge_id', 'id');
    }

    public function writings()
    {
        return $this->hasMany(Writing::class, 'bridge_id', 'id');
    }

    /**
     * Icon which will serve as a featured thumbnail.
     */
    public function icon()
    {
        return $this->belongsTo(Icon::class, 'icon_id');
    }
}
