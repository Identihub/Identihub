<?php

namespace App\Jobs;

use App\FontFamily;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateFontFamily implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var
     */
    private $family;

    /**
     * Create a new job instance.
     *
     * @param $family
     */
    public function __construct($family)
    {
        $this->family = $family;
    }

    /**
     * Execute the job.
     *
     * @return FontFamily
     */
    public function handle()
    {
        return FontFamily::create([
            'family' => $this->family->family,
            'category' => $this->family->category,
            'version' => $this->family->version
        ]);
    }
}
