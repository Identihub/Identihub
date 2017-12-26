<?php

namespace App\Http\Controllers\Api\V1;


use App\Bridge;
use App\Color;
use App\Events\BridgeUpdated;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateColorRequest;
use App\Jobs\CreateColor;
use App\Jobs\UpdateColor;
use App\Section;
use App\SectionType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class ColorsController extends Controller
{

    public function createColor(CreateColorRequest $request, $bridgeId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $sectionType = SectionType::where('name', SectionType::COLORS)->get()->first();
            $section = Section::where('section_type_id', $sectionType->id)->where('bridge_id', $bridgeId)->get()->first();

            (new CreateColor($request->only(['hex', 'cmyk', 'rgb']), $bridgeId, $section))->handle();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }
            return response()->json([
                'bridge' => $bridge,
                'section_types' => SectionType::all()
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

    public function updateColor(CreateColorRequest $request, $bridgeId, $colorId)
    {
        try {
            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            (new UpdateColor($request->only(['hex', 'cmyk', 'rgb']), $bridgeId, Color::findOrFail($colorId)))->handle();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }
            return response()->json([
                'bridge' => $bridge,
                'section_types' => SectionType::all()
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

    public function deleteColor($bridgeId, $colorId)
    {
        try {

            $user = Auth::user();
            $bridge = Bridge::findOrFail($bridgeId);
            if ($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $color = Color::findOrFail($colorId);
            $color->delete();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->where('user_id', $user->id)->findOrFail($bridgeId);
            try {
                event(new BridgeUpdated($bridge));
            } catch (\Exception $e) {
            }
            return response()->json([
                'bridge' => $bridge,
                'section_types' => SectionType::all()
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