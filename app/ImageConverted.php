<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageConverted extends Model
{
    use SoftDeletes;

    protected $table = 'images_converted';

    protected $fillable = [
        'filename', 'image_id', 'width', 'height'
    ];

    protected function image()
    {
        $this->hasOne(Image::class, 'id', 'image_id');
    }
}
