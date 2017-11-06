<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FontFamily extends Model
{
    protected $table = 'fonts_list';

    protected $fillable = [
        'family', 'category', 'version'
    ];

    protected $hidden = [
        'created_at', 'updated_at', 'version'
    ];

    public function variants()
    {
        return $this->hasMany(FontVariant::class, 'font_id', 'id');
    }
}
