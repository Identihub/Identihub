<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Events\BridgeUpdated;
use App\Http\Controllers\Controller;
use App\Http\Requests\BridgeUpdateRequest;
use App\Http\Requests\CreateSectionRequest;
use App\Http\Requests\SectionDescriptionRequest;
use App\Http\Requests\SectionTitleRequest;
use App\Jobs\CreateSection;
use App\Section;
use App\SectionType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{

    public function store(CreateSectionRequest $request, $bridgeId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            (new CreateSection($bridge, SectionType::findOrFail($request->get('section_type'))))->handle();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            return response()->json([
                'bridge' => $bridge,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Server error',
            ]);
        }

    }

    public function destroy($bridgeId, $sectionId)
    {
        try {

            $section = Section::findOrFail($sectionId);

            $user = Auth::user();
            $bridge = Bridge::findOrFail($section->bridge_id);
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $section->delete();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }
            return response()->json([
                'bridge' => $bridge,
            ]);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry not found',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Server error',
            ]);
        }
    }

    /**
     * Update title.
     *
     * @param SectionTitleRequest $request
     * @param                     $bridgeId
     * @param                     $sectionId
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateTitle(SectionTitleRequest $request, $bridgeId, $sectionId)
    {
        try {
            $section = Section::findOrFail($sectionId);

            $user = Auth::user();
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($section->bridge_id);

            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $section->title = $request->title;
            $section->save();

            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $ex) {
            }

            return response()->json([
                'bridge' => $bridge,
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry not found',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Server error',
            ]);
        }
    }

    /**
     * Update description.
     *
     * @param SectionDescriptionRequest $request
     * @param                           $bridgeId
     * @param                           $sectionId
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateDescription(SectionDescriptionRequest $request, $bridgeId, $sectionId)
    {
        try {
            $section = Section::findOrFail($sectionId);

            $user = Auth::user();
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($section->bridge_id);
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $section->description = $request->get('description');
            $section->save();

            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $ex) {
            }

            return response()->json([
                'bridge' => $bridge,
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry not found',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Server error',
            ]);
        }
    }
}
