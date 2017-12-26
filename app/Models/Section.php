<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    public $timestamps = false;

    protected $fillable = [
        'order', 'section_type_id', 'section_group_id', 'bridge_id'
    ];
}
