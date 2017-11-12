<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Font extends Model
{
    protected $table = "fonts";

    protected $fillable = [
        'variant_id', 'section_id', 'order', 'bridge_id'
    ];

    public function variant()
    {
        return $this->hasOne(FontVariant::class, 'id', 'variant_id');
    }
}
