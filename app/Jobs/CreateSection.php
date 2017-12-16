<?php

namespace App\Jobs;

use App\Bridge;
use App\Section;
use App\Models\SectionGroup;
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
    public function __construct(Bridge $bridge, SectionType $type, SectionGroup $group = null)
    {
        $this->bridge = $bridge;
        $this->type = $type;
        $this->group = $group;
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
            'section_group_id' => $this->group->id,
            'order' => $order,
            'title' => '',
            'description' => ''
        ]);
    }
}
