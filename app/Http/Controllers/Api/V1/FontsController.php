<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Events\BridgeUpdated;
use App\Font;
use App\FontFamily;
use App\FontVariant;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFontRequest;
use App\Jobs\CreateFont;
use App\Jobs\CreateFontImage;
use App\Jobs\CreateSection;
use App\Section;
use App\SectionType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class FontsController extends Controller
{

    public function search(Request $request, $search)
    {
        $fontModelCollection = FontFamily::where('family', $search)
            ->orWhere('family', 'like', '%' . $search . '%')->with('variants')->get();
        return response()->json([
            'fonts' => $fontModelCollection
        ]);
    }

    public function createFont(StoreFontRequest $request, $bridgeId)
    {

        try{

            $bridge = Bridge::findOrFail($bridgeId);

            if(Font::where('variant_id', $request->get('font_variant_id'))->get()->count())
                return;

            $section = (new CreateSection($bridge, SectionType::where('name', 'FONTS')->get()->first()))->handle();

            //$sectionType = SectionType::where('name', SectionType::FONTS)->get()->first();
            //$section = Section::where('section_type_id', $sectionType->id)->get()->first();


            $font = (new CreateFont(
                    $request->get('font_variant_id'),
                    $section))
                ->handle();

            $section->title = $font->variant->fontFamily->family . ' ' . $font->variant->variant;
            $section->save();

            (new CreateFontImage(FontVariant::findOrFail($request->get('font_variant_id'))))->handle();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try{
                event(new BridgeUpdated($bridge));
            }catch(\Exception $e){}
            return response()->json([
                'bridge' => $bridge,
                'section_types' => SectionType::all()
            ]);
        }catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Entry not found'
            ]);

        }catch (\Exception $e){
            return response()->json([
                'error' => 'Server error'
            ]);
        }

    }

    public function deleteFont($bridgeId, $fontId)
    {
        try{

            $font = Font::findOrFail($fontId);
            $section = Section::findOrFail($font->section_id);
            $font->delete();
            $section->delete();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridgeId);
            try{
                event(new BridgeUpdated($bridge));
            }catch(\Exception $e){}
            return response()->json([
                'bridge' => $bridge,
                'section_types' => SectionType::all()
            ]);

        }catch (ModelNotFoundException $e){
            return response()->json([
                'error' => 'Entry not found'
            ]);
        }catch (\Exception $e) {
            return response()->json([
                'error' => 'Server error'
            ]);
        }
    }

}