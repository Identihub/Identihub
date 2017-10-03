<?php

namespace App\Jobs;

use App\Color;
use App\Section;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateColor implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var
     */
    private $params;

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
     * @param $params
     * @param $bridgeId
     * @param Section $section
     */
    public function __construct($params, $bridgeId, Section $section)
    {
        $this->params = $params;
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
        return Color::create([
            'hex' => $this->params['hex'],
            'cmyk' => $this->params['cmyk'],
            'rgb' => $this->params['rgb'],
            'bridge_id' => $this->bridgeId,
            'section_id' => $this->section->id,
            'order' => Color::where('section_id', $this->section->id)->get()->count()
        ]);
    }
}
