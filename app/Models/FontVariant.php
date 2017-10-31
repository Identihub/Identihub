<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FontVariant extends Model
{
    protected $table = 'font_variants';

    protected $fillable = [
        'font_id', 'variant', 'link', 'image_link'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function fontFamily()
    {
        return $this->hasOne(FontFamily::class, 'id', 'font_id');
    }
}
