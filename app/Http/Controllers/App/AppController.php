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
        return view('app.app', [
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
        $bridge = Bridge::with(Bridge::WITH_RELATIONS)->where('slug', $slug)->first();

        $loggedUser = auth()->user();
        if ($loggedUser) {
            $isPublic = $loggedUser->id === $bridge->user_id;
        } else {
            $isPublic = false;
        }

        if ($bridge->count() === 0) {
            throw new ModelNotFoundException;
        }

        return view('app.project', [
            'pusherId'           => env('PUSHER_APP_KEY'),
            'public_bridge_path' => url('/') . "/",
            'is_public'          => $isPublic ? false : true,
            'bridge'             => json_encode($bridge),
            'section_types'      => json_encode(SectionType::all()),
        ]);
    }
}
