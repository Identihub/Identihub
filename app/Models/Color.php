<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    protected $fillable = [
        'hex', 'rgb', 'cmyk', 'section_id', 'order', 'bridge_id'
    ];

	public function save(array $options = [])
	{
		// before save code

		parent::save();
		// after save code
		Bridge::whereId($this->bridge_id)->increment('nr_colors');


	}

	public function update(array $attributes = [], array $options = [])
	{
		// before save code

		parent::update();
		// after save code
		Bridge::whereId($this->bridge_id)->increment('nr_colors');


	}
}
