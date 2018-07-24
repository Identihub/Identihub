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
            'pusherId'           => env('PUSHER_APP_KEY'),
            'public_bridge_path' => url('/') . "/bridge/",
            'is_public'          => false,
            'bridge'             => null,
        ]);
    }

    /**
     * Show the application project.
     *
     * @param $slug
     * @return mixed
     */
    public function project($slug)
    {
        $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->where('slug', $slug)->first();

        if ($bridge->count() === 0) {
            throw new ModelNotFoundException;
        }

        return view('app.project', [
            'pusherId'           => env('PUSHER_APP_KEY'),
            'public_bridge_path' => url('/') . "/",
            'is_public'          => auth()->check() ? false : true,
            'bridge'             => json_encode($bridge),
            'section_types'      => json_encode(SectionType::all()),
        ]);
    }

    public function publicIdentities($slug)
    {
        $bridge = Bridge::with('sections', 'icons', 'icons.converted', 'images', 'images.converted', 'fonts', 'fonts.variant', 'fonts.variant.fontFamily', 'colors')->where('slug', $slug)->get();

        if ($bridge->count() === 0) {
            throw new ModelNotFoundException;
        }

        return $this->view->make('app.public', [
            'pusherId'           => env('PUSHER_APP_KEY'),
            'public_bridge_path' => url('/') . "/identities/",
            'is_public'          => true,
            'bridge'             => json_encode($bridge->first()),
            'section_types'      => json_encode(SectionType::all()),
        ]);
    }

}
