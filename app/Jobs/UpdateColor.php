<?php

namespace App\Jobs;

use App\Color;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateColor implements ShouldQueue
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
     * @var Color
     */
    private $color;

    /**
     * Create a new job instance.
     *
     * @param $params
     * @param $bridgeId
     * @param Color $color
     */
    public function __construct($params, $bridgeId, Color $color)
    {
        $this->params = $params;
        $this->bridgeId = $bridgeId;
        $this->color = $color;
    }

    /**
     * Execute the job.
     *
     * @return Color
     */
    public function handle()
    {
        $color = $this->color;
        $color->rgb = $this->params['rgb'];
        $color->hex = $this->params['hex'];
        $color->cmyk = $this->params['cmyk'];
        $color->save();
        return $color;
    }
}
