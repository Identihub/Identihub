<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionGroup extends Model
{

    protected $fillable = [
        'description', 'name', 'order', 'section_type_id', 'bridge_id'
    ];
}
