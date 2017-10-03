<?php

namespace App\Jobs;

use App\FontFamily;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateFontFamily implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var
     */
    private $family;

    /**
     * @var FontFamily
     */
    private $fontFamily;

    /**
     * Create a new job instance.
     *
     * @param $family
     * @param FontFamily $fontFamily
     */
    public function __construct($family, FontFamily $fontFamily)
    {
        $this->family = $family;
        $this->fontFamily = $fontFamily;
    }

    /**
     * Execute the job.
     *
     * @return FontFamily
     */
    public function handle()
    {
        $fontFamily = $this->fontFamily;
        $fontFamily->family = $this->family->family;
        $fontFamily->category = $this->family->category;
        $fontFamily->version = $this->family->version;
        $fontFamily->save();
        return $fontFamily;
    }
}
