<?php

namespace App\Jobs;

use App\FontVariant;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateFontImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var FontVariant
     */
    private $fontVariant;

    /**
     * Create a new job instance.
     *
     * @param FontVariant $fontVariant
     * @internal param $fontVariantId
     */
    public function __construct(FontVariant $fontVariant)
    {
        $this->fontVariant = $fontVariant;
    }

    /**
     * Execute the job.
     * @throws \ImagickException
     */
    public function handle()
    {
        $fontVariant = $this->fontVariant;

        $link = md5($fontVariant->link) . '.ttf';
        $storage = \Storage::disk('fonts');
        $fontRenderedStorage = \Storage::disk('fonts_rendered');

        if(!$storage->exists($link))
            $storage->put($link, file_get_contents($fontVariant->link));

        $filePath = storage_path('app/fonts/') . $link;

        $draw = new \ImagickDraw();
        $draw->setFont($filePath);
        $draw->setStrokeWidth(1);
        $draw->setFontSize(65);
        $draw->annotation(20, 100, "Abc");

        $drawOther = new \ImagickDraw();
        $drawOther->setFont($filePath);
        $drawOther->setStrokeWidth(1);
        $drawOther->setFontSize(25);
        $drawOther->annotation(155, 70, "A B C D E F G H I J K L M N O P Q R S T U V W X Y Z");
        $drawOther->annotation(155, 130, "a b c d e f g h i j k l m n o p q r s t u v w x y z");
        $drawOther->annotation(155, 190, "1 2 3 4 5 6 7 8 9 0 ' ? ` \" !");

        $imagick = new \Imagick();
        $imagick->newImage(800, 240, 'transparent');
        $imagick->setImageFormat("png");
        $imagick->drawImage($draw);
        $imagick->drawImage($drawOther);

        $fontRenderedStorage->put($link . '.png', $imagick->getImageBlob());
        $fontVariant->image_link = $link . '.png';
        $fontVariant->save();
    }
}
