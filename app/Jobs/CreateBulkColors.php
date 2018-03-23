<?php

namespace App\Jobs;

use App\Color;
use App\Section;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateBulkColors implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var
     */
    private $swatch;

    /**
     * @var
     */
    private $bridgeId;

    /**
     * @var Section
     */
    private $section;

    /**
     * Create a new job instance.
     *
     * @param $swatch
     * @param $bridgeId
     * @param Section $section
     */
    public function __construct($swatch, $bridgeId, Section $section)
    {
        $this->swatch = $swatch;
        $this->bridgeId = $bridgeId;
        $this->section = $section;
    }

    /**
     * Execute the job.
     *
     * @return Color
     */
    public function handle()
    {
        // dd($this->swatch);
        $swatchContents = file_get_contents($this->swatch);
        $swatchColors = Color::parseFromSwatchContents($swatchContents);

        foreach ($swatchColors as $color) {
            Color::create([
                'hex' => $color['hex'],
                'cmyk' => $color['cmyk'],
                'rgb' => $color['rgb'],
                'bridge_id' => $this->bridgeId,
                'section_id' => $this->section->id,
                'order' => Color::where('section_id', $this->section->id)->get()->count()
            ]);
        }
    }
}
