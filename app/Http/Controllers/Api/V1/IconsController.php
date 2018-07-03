<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Http\Requests\CreateConvertedIcon;
use App\Icon;
use App\Repositories\IconRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
     * Serve the generated icon publicly.
     *
     * @param CreateConvertedIcon $request
     * @param Bridge              $bridge
     * @param Icon                $icon
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function customSizeIconConverted(CreateConvertedIcon $request, Bridge $bridge, Icon $icon)
    {
        try {
            $width = (int) $request->get('width');
            $height = (int) ($width / $icon->width_ratio);
            $format = $request->get('format');

            $path = $this->iconRepo->generateIconConverted($bridge, $icon, $width, $height, $format);

            return response()->json([
                'download_url' => url($path),
                'filename'     => basename($path),
            ]);

        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Entry not found']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Server error: ' . $e->getMessage()]);
        }
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
            $icon->save();

            return $this->simple_json(true, "Asset background color updated successfully.");

        } catch (\Exception $e) {
            return $this->simple_json(false, $e->getMessage());
        }
    }
}
