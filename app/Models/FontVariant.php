<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FontVariant extends Model
{
    protected $table = 'font_variants';

    protected $fillable = [
        'font_id', 'variant', 'link', 'image_link',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function fontFamily()
    {
        return $this->hasOne(FontFamily::class, 'id', 'font_id');
    }

    /**
     * Get a user friendly variant name.
     */
    public function variantText()
    {
        switch ($this->variant) {
            case '100':
                $variant = 'Thin';
                break;
            case '100italic':
                $variant = 'Thin Italic';
                break;
            case '200':
                $variant = 'Ultra Thin';
                break;
            case '200italic':
                $variant = 'Ultra Thin Italic';
                break;
            case '300':
                $variant = 'Light';
                break;
            case '300italic':
                $variant = 'Light Italic';
                break;
            case '400':
                $variant = 'Regular';
                break;
            case '400italic':
                $variant = 'Regular Italic';
                break;
            case '500':
                $variant = 'Medium';
                break;
            case '500italic':
                $variant = 'Medium Italic';
                break;
            case '600':
                $variant = 'Semi Bold';
                break;
            case '600italic':
                $variant = 'Semi Bold Italic';
                break;
            case '700':
                $variant = 'Bold';
                break;
            case '700italic':
                $variant = 'Bold Italic ';
                break;
            case '800':
                $variant = 'Ultra Bold';
                break;
            case '800italic':
                $variant = 'Ultra Bold Italic';
                break;
            case '900':
                $variant = 'Black';
                break;
            case '900italic':
                $variant = 'Black Italic';
                break;
            default:
                $variant = $this->variant;
        }

        return $variant;
    }
}
