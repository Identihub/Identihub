<?php



namespace Tests\Unit;

use Tests\TestCase;
use Imagick;
use ImagickPixel;

function svgScaleHack($svg, $minWidth, $minHeight)
{
    $reW = '/(.*<svg[^>]* width=")([\d.]+px)(.*)/si';
    $reH = '/(.*<svg[^>]* height=")([\d.]+px)(.*)/si';
    preg_match($reW, $svg, $mw);
    preg_match($reH, $svg, $mh);

    print_r($mw);
      
    $width = floatval($mw[2]);
    $height = floatval($mh[2]);
    if (!$width || !$height) return false;

    // scale to make width and height big enough
    $scale = 1;
    if ($width < $minWidth)
        $scale = $minWidth/$width;
    if ($height < $minHeight)
        $scale = max($scale, ($minHeight/$height));

    $width *= $scale*2;
    $height *= $scale*2;

    $svg = preg_replace($reW, "\${1}{$width}px\${3}", $svg);
    $svg = preg_replace($reH, "\${1}{$height}px\${3}", $svg);

    return $svg;
}

class SVGTest extends TestCase
{
    /**
     * A basic test example.
     * https://stackoverflow.com/questions/17871022/imagick-php-conversion-from-svg-to-jpg
     * @return void
     */
    public function testBasicTest()
    {
      $testfile = 'tests/Unit/test.svg';
      $outfile = 'tests/Unit/test.png';      
      $this->assertTrue(file_exists($testfile));      
      $svgdata = file_get_contents($testfile);
      $width = 1200;
      $height = 1200;
      //      $svgdata = svgScaleHack($svgdata, $width, $height);
      
      $im = new Imagick;
      $pixel = new ImagickPixel( 'transparent' );
      $im->setBackgroundColor( $pixel );
      
      $im->readImageBlob( $svgdata );
      $im->setImageFormat( 'png32' );
      $im->resizeImage( $width, $height, \Imagick::FILTER_LANCZOS, 1 );

      $im->writeImage($outfile);
      
      $this->assertTrue(true);
  
    }
}
