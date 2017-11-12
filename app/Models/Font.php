<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Font extends Model
{
    protected $table = "fonts";

    protected $fillable = [
        'variant_id', 'section_id', 'order', 'bridge_id'
    ];

    public function variant()
    {
        return $this->hasOne(FontVariant::class, 'id', 'variant_id');
    }

	public function save(array $options = [])
	{
		// before save code

		parent::save();
		// after save code
		Bridge::whereId($this->bridge_id)->increment('nr_fonts');


	}

	public function update(array $attributes = [], array $options = [])
	{
		// before update code

		parent::update();
		// after update code
		Bridge::whereId($this->bridge_id)->increment('nr_fonts');

	}
}
