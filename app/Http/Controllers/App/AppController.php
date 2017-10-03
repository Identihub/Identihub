<?php

namespace App\Http\Controllers\App;

use App\Bridge;
use App\Http\Controllers\Controller;
use App\SectionType;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AppController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->view->make('app.app', [
            'pusherId' => env('PUSHER_APP_KEY'),
            'public_bridge_path' => url('/') . "/bridge/",
            'is_public' => false,
            'bridge' => null
        ]);
    }

    public function publicIdentities($slug)
    {
        $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->where('slug', $slug)->get();

        if($bridge->count() === 0){
            throw new ModelNotFoundException;
        }

        return $this->view->make('app.public', [
            'pusherId' => env('PUSHER_APP_KEY'),
            'public_bridge_path' => url('/') . "/identities/",
            'is_public' => true,
            'bridge' => json_encode($bridge->first()),
            'section_types' => json_encode(SectionType::all())
        ]);
    }

}
