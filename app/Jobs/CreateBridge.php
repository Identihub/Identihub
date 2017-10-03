<?php

namespace App\Jobs;

use App\Bridge;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateBridge implements ShouldQueue
{



    protected $params = [];

    /**
     * CreateBridge constructor.
     * @param $params
     * @return CreateBridge $this
     */
    public function __construct($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return Bridge
     */
    public function handle()
    {
        return Bridge::create($this->params);
    }
}
