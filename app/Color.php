<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    protected $fillable = [
        'hex', 'rgb', 'cmyk', 'section_id', 'order', 'bridge_id'
    ];
}
