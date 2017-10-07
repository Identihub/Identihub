<?php

namespace App\Http\Controllers\Api\V1;


use App\Bridge;
use App\Color;
use App\Http\Controllers\Controller;
use App\Icon;
use App\Image;
use App\Jobs\ReorderAfterDelete;
use App\SectionType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function changedOrderOnSameSection(Request $request, $type, $objectId, $newOrder)
    {
        try{

            switch ($type) {
                case 'image':
                    $object = Image::findOrFail($objectId);
                    $objects = Image::where('section_id', $object->section_id)->get();
                    break;
                case 'icon':
                    $object = Icon::findOrFail($objectId);
                    $objects = Icon::where('section_id', $object->section_id)->get();
                    break;
                case 'color':
                    $object = Color::findOrFail($objectId);
                    $objects = Color::where('section_id', $object->section_id)->get();
                    break;
                default:
                    throw new \Exception("Not good type");
            }

            $user = Auth::user();
            $bridge = Bridge::findOrFail($object->bridge_id);
            if($user->id !== $bridge->user_id)
                throw new ModelNotFoundException();

            $oldOrder = $object->order;

            $start = $oldOrder > $newOrder ? $newOrder : $oldOrder;
            $end = $oldOrder > $newOrder ? $oldOrder : $newOrder;

            foreach ($objects as $obj) {
                $order = $obj->order;
                if($oldOrder > $newOrder){
                    $this->inRange($order, $start, $end) ? $obj->order = $order + 1 : null;
                }else{
                    $this->inRange($order, $start, $end) ? $obj->order = $order - 1 : null;
                }
                $obj->save();
            }

            $object->order = $newOrder;
            $object->save();

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($object->bridge_id);
            return response()->json([
                'bridge' => $bridge,
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

    private function inRange($order, $start, $end)
    {
        return $order >= $start && $order <= $end;
    }

    public function changedSection(Request $request, $type, $objectId, $newSection)
    {
        try{
            switch ($type) {
                case 'image':
                    $object = Image::findOrFail($objectId);
                    $this->checkIfBridgeIsFromTheSameUser($object->bridge_id);
                    $oldSection = $object->section_id;
                    $object->section_id = $newSection;
                    $object->order = Image::where('section_id', $newSection)->get()->count();
                    $object->save();
                    (new ReorderAfterDelete(Image::where('section_id', $oldSection)->get()))->handle();
                    break;
                case 'icon':
                    $object = Icon::findOrFail($objectId);
                    $this->checkIfBridgeIsFromTheSameUser($object->bridge_id);
                    $oldSection = $object->section_id;
                    $object->section_id = $newSection;
                    $object->order = Icon::where('section_id', $newSection)->get()->count();
                    $object->save();
                    (new ReorderAfterDelete(Icon::where('section_id', $oldSection)->get()))->handle();
                    break;
                case 'color':
                    $object = Color::findOrFail($objectId);
                    $this->checkIfBridgeIsFromTheSameUser($object->bridge_id);
                    $oldSection = $object->section_id;
                    $object->section_id = $newSection;
                    $object->order = Color::where('section_id', $newSection)->get()->count();
                    $object->save();
                    (new ReorderAfterDelete(Color::where('section_id', $oldSection)->get()))->handle();
                    break;
                default:
                    throw new \Exception("Not good type");
            }

            $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->findOrFail($object->bridge_id);
            return response()->json([
                'bridge' => $bridge,
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

    private function checkIfBridgeIsFromTheSameUser($bridgeId){
        $user = Auth::user();
        $bridge = Bridge::findOrFail($bridgeId);
        if($user->id !== $bridge->user_id)
            throw new ModelNotFoundException();
    }


}