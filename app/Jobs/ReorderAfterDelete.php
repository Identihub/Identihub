<?php

namespace App\Jobs;

use App\Section;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ReorderAfterDelete implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var
     */
    private $models;

    /**
     * Create a new job instance.
     *
     * @param $models
     * @internal param $model
     * @internal param $type
     */
    public function __construct($models)
    {
        $this->models = $models;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        for($i = 0; $i < $this->models->count(); $i++){
            $model = $this->models[$i];
            $model->order = $i;
            $model->save();
        }
    }
}
