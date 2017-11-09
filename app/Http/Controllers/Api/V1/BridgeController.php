<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Events\BridgeCreated;
use App\Events\BridgeDeleted;
use App\Events\BridgeUpdated;
use App\Http\Controllers\Controller;
use App\Http\Requests\BridgeStoreRequest;
use App\Http\Requests\BridgeUpdateRequest;
use App\Http\Requests\UpdateBridgeSlug;
use App\Jobs\CreateSection;
use App\Jobs\DeleteBridge;
use App\Jobs\UpdateBridgeName;
use App\Jobs\CreateBridge;
use App\SectionType;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BridgeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bridges = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->where('user_id', $user->id)->get();
        return response()->json([
            'bridges' => $bridges,
            'section_types' => SectionType::all()
        ]);
    }

    public function show($id)
    {
        try{
            $user = Auth::user();
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($id);
            if($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();
            return response()->json([
                'bridge' => $bridge,
                'section_types' => SectionType::all()
            ]);
        }catch (ModelNotFoundException $e){
            return response()->json([
                'error' => 'Entry not found'
            ]);
        }

    }

    public function store(BridgeStoreRequest $request, Connection $db)
    {
        $user = Auth::user();

        $name = $request->only(['name'])['name'];
        $slug = str_slug($name);

        $bridgesWithThatSlug = Bridge::where('slug', $slug)->get();
        if($bridgesWithThatSlug->count() !== 0)
            $slug = $slug . '-' . substr(md5(microtime()),rand(0,26),5);

        try{

            $bridge = $db->transaction(function() use ($request, $slug) {

                // Create Bridge
                $bridge = (new CreateBridge(
                    array_merge(
                        $request->only(['name']),
                        ['user_id' => Auth::user()->id],
                        ['slug' => $slug]
                    )))->handle();

                // Create blank sections for every type
                foreach ([
                             SectionType::getColorsSectionType(),
                             SectionType::getIconsSectionType(),
                             SectionType::getImagesSectionType()
                         ] as $sectionType)
                {
                    (new CreateSection($bridge, $sectionType))->handle();
                }

                return $bridge;

            });


            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($bridge->id);
//
//            try{
//                event(new BridgeCreated($bridge));
//            }catch(\Exception $e){}

            return response()->json([
                'bridge' => $bridge
            ]);
        }catch (\Exception $e){
            return response()->json([
                'error' => 'Server error'
            ]);
        }

    }

    public function update(BridgeUpdateRequest $request, $id)
    {
        try{
            $user = Auth::user();

            $bridge = Bridge::findOrFail($id);

            if($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $bridge = $this->dispatch(new UpdateBridgeName($bridge, $request->only(['name'])));
            try{
                event(new BridgeCreated($bridge));
            }catch(\Exception $e){}
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($id);
            return response()->json([
                'bridge' => $bridge
            ]);
        }catch (ModelNotFoundException $e){
            return response()->json([
                'error' => 'Entry not found'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'error' => 'Server error'
            ]);
        }

    }

    public function updateSlug(UpdateBridgeSlug $request, $id)
    {
        try{
            $user = Auth::user();

            $bridge = Bridge::findOrFail($id);

            if($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $slug = $this->getSlug($request);
            $bridge->slug = $slug;
            $bridge->save();
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($id);
            try{
                event(new BridgeCreated($bridge));
            }catch(\Exception $e){}
            return response()->json([
                'bridge' => $bridge
            ]);
        }catch (ModelNotFoundException $e){
            return response()->json([
                'error' => 'Entry not found'
            ]);
        }catch(\Exception $e){
            return response()->json([
                'error' => 'Server error'
            ]);
        }
    }

    private function getSlug($request)
    {
        $slug = $request->get('slug');
        $slugs = Bridge::where('slug', $slug)->get();
        if($slugs->count() !== 0)
            return $slug . '-' . substr(md5(microtime()),rand(0,26),5);
        return $slug;
    }

    public function destroy($id)
    {

        try{
            $user = Auth::user();

            $bridge = Bridge::findOrFail($id);

            if($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $bridge->delete();
            $bridges = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->where('user_id', $user->id)->get();
            return response()->json([
                'bridges' => $bridges,
                'section_types' => SectionType::all()
            ]);
        }catch (ModelNotFoundException $e){
            return response()->json([
                'error' => 'Entry not found'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'error' => 'Server error'
            ]);
        }

    }

    public function updateName(BridgeUpdateRequest $request, $id) {
        try{
            $user = Auth::user();

            $bridge = Bridge::findOrFail($id);

            if($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $bridge->name = $request->get('name');
            $bridge->save();
            try{
                event(new BridgeCreated($bridge));
            }catch(\Exception $e){}
            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($id);
            return response()->json([
                'bridge' => $bridge
            ]);
        }catch (ModelNotFoundException $e){
            return response()->json([
                'error' => 'Entry not found'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'error' => 'Server error'
            ]);
        }
    }
}
