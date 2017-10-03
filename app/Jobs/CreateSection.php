<?php

namespace App\Jobs;

use App\Bridge;
use App\Section;
use App\SectionType;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateSection implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Bridge
     */
    private $bridge;
    /**
     * @var SectionType
     */
    private $type;

    /**
     * Create a new job instance.
     *
     * @param Bridge $bridge
     * @param SectionType $type
     */
    public function __construct(Bridge $bridge, SectionType $type)
    {
        $this->bridge = $bridge;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $bridge = $this->bridge;
        $sections = $bridge->sections;
        $sectionsWithType = $bridge->getSectionsFromTypeModel($sections, $this->type);
        $order = $sectionsWithType->count();

        return Section::create([
            'bridge_id' => $this->bridge->id,
            'section_type_id' => $this->type->id,
            'order' => $order,
            'title' => '',
            'description' => ''
        ]);
    }
}
