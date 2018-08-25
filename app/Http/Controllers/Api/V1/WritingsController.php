<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWritingRequest;
use App\Jobs\CreateSection;
use App\SectionType;
use App\Writing;

class WritingsController extends Controller
{

    /**
     * Create writings.
     *
     * @param Bridge              $bridge
     * @param StoreWritingRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function createWriting(Bridge $bridge, StoreWritingRequest $request)
    {
        $this->authorize('update', $bridge);

        $sectionType = SectionType::where('name', 'WRITINGS')->first();

        $section = $bridge->sections()->where('section_type_id', $sectionType->id)->first();

        if (!$section) {
            $section = (new CreateSection($bridge, $sectionType))->handle();
        }

        $latest = $bridge->writings()->latest()->first();

        $created = $bridge->writings()->create([
            'title'       => $request->title,
            'description' => $request->description,
            'section_id'  => $section->id,
            'order'       => $latest ? $latest->order + 1 : 1,
        ]);

        if ($created) {
            $bridge = Bridge::with(Bridge::WITH_RELATIONS)->findOrFail($bridge->id);

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        }

        return $this->simple_json(false, "Writing could not be created.");
    }


    /**
     * Update specified writing.
     *
     * @param Bridge              $bridge
     * @param Writing             $writing
     * @param StoreWritingRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function updateWriting(Bridge $bridge, Writing $writing, StoreWritingRequest $request)
    {
        $this->authorize('update', $bridge);

        $writing->title = $request->title;
        $writing->description = $request->description;
        $done = $writing->save();

        if ($done) {
            $bridge = Bridge::with(Bridge::WITH_RELATIONS)->findOrFail($bridge->id);

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        }

        return $this->simple_json(false, "Writing could not be updated.");
    }

    /**
     * Delete specified writing.
     *
     * @param Bridge  $bridge
     * @param Writing $writing
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function deleteWriting(Bridge $bridge, Writing $writing)
    {
        $this->authorize('update', $bridge);

        $done = $writing->delete();

        if ($done) {
            $bridge = Bridge::with(Bridge::WITH_RELATIONS)->findOrFail($bridge->id);

            return response()->json([
                'bridge'        => $bridge,
                'section_types' => SectionType::all(),
            ]);
        }

        return $this->simple_json(false, "Writing could not be deleted.");
    }
}