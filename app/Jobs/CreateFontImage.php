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
     *
     * @return void
     */
    public function handle()
    {
        $fontVariant = $this->fontVariant;

        $link = md5($fontVariant->link) . '.ttf';
        $storage = \Storage::disk('fonts');
        $fontRenderedStorage = \Storage::disk('fonts_rendered');

        if(!$storage->exists($link))
            $storage->put($link, file_get_contents($fontVariant->link));

//        if($fontRenderedStorage->exists($link . '.png'))
//            return;

        $filePath = storage_path('app/fonts/') . $link;

        $draw = new \ImagickDraw();
        $draw->setFont($filePath);
        $draw->setStrokeWidth(1);
        $draw->setFontSize(48);
        $draw->annotation(10, 91, "Abc");

        $drawOther = new \ImagickDraw();
        $drawOther->setFont($filePath);
        $drawOther->setStrokeWidth(1);
        $drawOther->setFontSize(16);
        $drawOther->annotation(120, 40, "A B C D E F G H I J K L M N O P Q R S T U V W X Y Z");
        $drawOther->annotation(120, 80, "a b c d e f g h i j k l m n o p q r s t u v w x y z");
        $drawOther->annotation(120, 120, "1 2 3 4 5 6 7 8 9 0 ' ? ` \" !");

        $imagick = new \Imagick();
        $imagick->newImage(500, 150, 'transparent');
        $imagick->setImageFormat("png");
        $imagick->drawImage($draw);
        $imagick->drawImage($drawOther);

        $fontRenderedStorage->put($link . '.png', $imagick->getImageBlob());
        $fontVariant->image_link = $link . '.png';
        $fontVariant->save();
    }
}
