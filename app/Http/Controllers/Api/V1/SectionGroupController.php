<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Http\Requests\SectionGroupDescriptionRequest;
use App\Http\Requests\SectionGroupTitleRequest;
use App\Models\SectionGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SectionGroupController extends Controller
{

    public function updateTitle(SectionGroupTitleRequest $request, $bridgeId, $sectionGroupId)
    {
        try {
            $sectionGroup = SectionGroup::findOrFail($sectionGroupId);

            $user = Auth::user();
            $bridge = Bridge::findOrFail($sectionGroup->bridge_id);
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $sectionGroup->name = $request->get('title');
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
