<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Icon;
use App\Repositories\IconRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IconsController extends Controller
{

    private $iconRepo;

    public function __construct(IconRepository $iconRepo)
    {
        parent::__construct();
        $this->iconRepo = $iconRepo;
    }

    /**
     * Update background color of the icon.
     *
     * @param Bridge  $bridge
     * @param Icon    $icon
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function updateBgColor(Bridge $bridge, Icon $icon, Request $request)
    {
        $this->validate($request, [
            'color' => 'required',
        ], [
            'color.required' => "Color must be specified.",
        ]);

        $this->authorize('update', $icon);

        try {
            $color = $request->get('color');

            $icon->bg_color = $color;
            $done = $icon->save();

            return $this->simple_json(true, "Asset background color updated successfully.");

        } catch (\Exception $e) {
            return $this->simple_json(false, $e->getMessage());
        }
    }
}
