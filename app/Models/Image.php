<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    protected $table = 'images';

    protected $fillable = [
        'filename', 'bridge_id', 'width_ratio', 'section_id', 'order'
    ];

    public function converted()
    {
        return $this->hasMany(ImageConverted::class, 'image_id', 'id');
    }
}
