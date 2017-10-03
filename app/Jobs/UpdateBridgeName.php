<?php

namespace App\Jobs;

use App\Bridge;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateBridgeName implements ShouldQueue
{
    use Dispatchable;

    /**
     * @var Bridge
     */
    private $bridge;

    /**
     * @var
     */
    private $data;

    /**
     * Create a new job instance.
     *
     * @param Bridge $bridge
     * @param $data
     */
    public function __construct(Bridge $bridge, $data)
    {
        $this->bridge = $bridge;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->bridge->name = $this->data['name'];
        $this->bridge->save();
    }
}
