<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IconConverted extends Model
{
    use SoftDeletes;

    protected $table = 'icons_converted';

    protected $fillable = [
        'filename', 'icon_id', 'width', 'height', 'is_visitor_custom', 'format'
    ];

    public function icon()
    {
        $this->hasOne(Icon::class, 'id', 'icon_id');
    }
}
