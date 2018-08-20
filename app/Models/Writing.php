<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writing extends Model
{
    protected $table = 'writings';

    protected $fillable = [
        'title', 'description', 'section_id', 'order', 'bridge_id',
    ];
}
