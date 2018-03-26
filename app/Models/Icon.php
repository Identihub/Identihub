<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Icon extends Model
{
    use SoftDeletes;

    protected $table = 'icons';

    protected $fillable = [
        'filename', 'filename_png', 'bridge_id', 'width_ratio', 'section_id', 'order'
    ];

    public function getFilenamePngAttribute($value)
    {
        return (strlen($value) > 1) ? $value :  $this->filename;

    }

    public function converted()
    {
        return $this->hasMany(IconConverted::class, 'icon_id', 'id');
    }

    public function save(array $options = [])
    {
        // before save code

        parent::save();
        // after save code
        Bridge::whereId($this->bridge_id)->increment('nr_icons');
    }

    public function update(array $attributes = [], array $options = [])
    {
        // before update code

        parent::update();
        // after update code
        Bridge::whereId($this->bridge_id)->increment('nr_icons');
    }
}
