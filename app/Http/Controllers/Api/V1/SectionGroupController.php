<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Events\BridgeUpdated;
use App\Http\Requests\SectionGroupDescriptionRequest;
use App\Http\Requests\SectionGroupTitleRequest;
use App\Models\SectionGroup;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class SectionGroupController extends Controller
{

    /**
     * @param SectionGroupTitleRequest $request
     * @param Bridge $bridgeId
     * @param SectionGroup $sectionGroup
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateTitle(SectionGroupTitleRequest $request, Bridge $bridge, SectionGroup $sectionGroup)
    {
        try {
            // TODO fix this model binding issue:
            $bridge = Bridge::find($bridge);
            $sectionGroup = Bridge::find($sectionGroup);
            $user = Auth::user();
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $sectionGroup->name = $request->get('title');
            $sectionGroup->save();

            $bridge->load('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors');
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }
            return response()->json([
                'bridge' => $bridge
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry not found'
            ]);
        } catch (\Exception $e) {

        }
    }

    public function updateDescription(SectionGroupDescriptionRequest $request, $bridgeId, $sectionGroupId)
    {
        try {
            $sectionGroup = Section::findOrFail($sectionGroupId);

            $user = Auth::user();
            $bridge = Bridge::findOrFail($sectionGroup->bridge_id);
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $sectionGroup->description = $request->get('description');
            $sectionGroup->save();

            $bridge = Bridge::with('sections')->findOrFail($bridgeId);
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }
            return response()->json([
                'bridge' => $bridge
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
