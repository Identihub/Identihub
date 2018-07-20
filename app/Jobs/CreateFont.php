<?php

namespace App\Jobs;

use App\Font;
use App\FontVariant;
use App\Section;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateFont implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var FontVariant
     */
    private $section;

    /**
     * @var
     */
    private $fontVariantId;

    /**
     * Create a new job instance.
     *
     * CreateFont constructor.
     * @param         $fontVariantId
     * @param Section $section
     */
    public function __construct($fontVariantId, Section $section)
    {
        $this->section = $section;
        $this->fontVariantId = $fontVariantId;
    }

    /**
     * Execute the job.
     *
     * @return Font
     */
    public function handle()
    {
        return Font::create([
            'variant_id' => $this->fontVariantId,
            'section_id' => $this->section->id,
            'bridge_id'  => $this->section->bridge_id,
            'order'      => Font::where('section_id', $this->section->id)->get()->count(),
        ]);
    }
}
