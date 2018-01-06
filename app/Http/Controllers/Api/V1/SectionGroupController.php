<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Events\BridgeUpdated;
use App\Http\Requests\SectionGroupDescriptionRequest;
use App\Http\Requests\SectionGroupTitleRequest;
use App\Models\SectionGroup;
use App\Section;
use App\Http\Controllers\Controller;
use App\SectionType;
use App\Services\SectionGroupService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class SectionGroupController extends Controller
{

    /**
     * @param CreateSectionRequest $request
     * @param Bridge $bridge
     * @param SectionGroup $group
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateSectionGroupRequest $request, Bridge $bridge, SectionGroupService $service)
    {
        try {
            $user = Auth::user();
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();
            $service->create($bridge, SectionType::findOrFail($request->get('section_type')));
            // event(new BridgeUpdated($bridge));
            $bridge->load('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors');
            return response()->json([
                'bridge' => $bridge
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Server error'
            ]);
        }
    }

    /**
     * @param SectionGroupTitleRequest $request
     * @param Bridge $bridgeId
     * @param SectionGroup $sectionGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateTitle(SectionGroupTitleRequest $request, Bridge $bridge, SectionGroup $sectionGroup)
    {
        try {
            $user = Auth::user();
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $sectionGroup->name = $request->get('title');
            $sectionGroup->save();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->find($bridge->id);
            $sectionTypes = SectionType::leftJoin('section_groups', function ($join) use ($bridge) {
                $join->on('section_type_id', '=', 'section_types.id');
                $join->where('section_groups.bridge_id', $bridge->id);

            })
                ->get(['section_types.id',
                    'section_groups.name as group_name',
                    'section_groups.description as group_description',
                    'section_types.name as name',
                    'section_groups.id as group_id']);

            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }
            return response()->json([
                'bridge' => $bridge,
                'section_types' => $sectionTypes
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry not found'
            ]);
        } catch (\Exception $e) {

        }
    }

    public function updateDescription(SectionGroupDescriptionRequest $request,  Bridge $bridge, SectionGroup $sectionGroup)
    {
        try {

            $user = Auth::user();
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $sectionGroup->description = $request->get('description');
            $sectionGroup->save();

            $bridge->load('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors');
            $sectionTypes = SectionType::leftJoin('section_groups', function ($join) use ($bridge) {
                $join->on('section_type_id', '=', 'section_types.id');
                $join->where('section_groups.bridge_id', $bridge->id);

            })
                ->get(['section_types.id',
                    'section_groups.name as group_name',
                    'section_groups.description as group_description',
                    'section_types.name as name',
                    'section_groups.id as group_id']);

            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }
            return response()->json([
                'bridge' => $bridge,
                'section_types' => $sectionTypes
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry not found'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Server error'
            ]);
        }
    }

}
