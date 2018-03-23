<?php

namespace Tests\Unit;

use App\Color;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ColorCanParseSwatch extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function colorCanParseSwatch()
    {
        $contents = file_get_contents(app_path('../tests/utilities/open-color.gpl'));

        $colors = Color::parseFromSwatchContents($contents);

        $this->assertTrue(is_a($colors, 'Illuminate\Support\Collection'));
        $this->assertEquals($colors->count(), 130);


        $this->assertSame($colors->first(), [
            'rgb' => '248 249 250',
            'hex' => 'F8F9FA',
            'cmyk' => '1 0 0 2',
        ]);
    }
}
