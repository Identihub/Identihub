<?php

namespace App\Jobs;

use App\FontFamily;
use App\FontVariant;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateFontVariant implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var
     */
    private $variant;

    /**
     * @var FontFamily
     */
    private $fontFamily;

    /**
     * @var
     */
    private $link;

    /**
     * Create a new job instance.
     *
     * @param $variant
     * @param FontFamily $fontFamily
     * @param $link
     */
    public function __construct($variant, FontFamily $fontFamily, $link)
    {
        $this->variant = $variant;
        $this->fontFamily = $fontFamily;
        $this->link = $link;
    }

    /**
     * Execute the job.
     *
     * @return FontVariant
     */
    public function handle()
    {
        return FontVariant::create([
            'font_id' => $this->fontFamily->id,
            'variant' => $this->variant,
            'link' => $this->link
        ]);
    }
}
