<?php

namespace App\Jobs;

use App\FontFamily;
use App\FontVariant;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateFontVariant implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var
     */
    private $variant;

    /**
     * @var
     */
    private $link;

    /**
     * @var FontVariant
     */
    private $fontVariant;

    /**
     * Create a new job instance.
     *
     * @param $variant
     * @param FontVariant $fontVariant
     * @param FontFamily $fontFamily
     * @param $link
     */
    public function __construct($variant, FontVariant $fontVariant, $link)
    {
        $this->variant = $variant;
        $this->link = $link;
        $this->fontVariant = $fontVariant;
    }

    /**
     * Execute the job.
     *
     * @return FontVariant
     */
    public function handle()
    {
        $fontVariant = $this->fontVariant;
        $fontVariant->variant = $this->variant;
        $fontVariant->link = $this->link;
        $fontVariant->save();
        return $fontVariant;
    }
}
