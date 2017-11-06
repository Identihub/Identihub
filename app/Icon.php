<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Icon extends Model
{
    use SoftDeletes;

    protected $table = 'icons';

    protected $fillable = [
        'filename', 'bridge_id', 'width_ratio', 'section_id', 'order'
    ];

    public function converted()
    {
        return $this->hasMany(IconConverted::class, 'icon_id', 'id');
    }

}
