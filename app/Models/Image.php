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

	public function save(array $options = [])
	{
		// before save code

		parent::save();
		// after save code
		Bridge::whereId($this->bridge_id)->increment('nr_images');

	}

	public function update(array $attributes = [], array $options = [])
	{
		// before update code

		parent::update();
		// after update code
		Bridge::whereId($this->bridge_id)->increment('nr_images');

	}
}
