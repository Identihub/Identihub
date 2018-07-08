<?php

namespace App\Http\Controllers\Api\V1;

use App\Bridge;
use App\Http\Requests\ConvertedStoreRequest;
use App\Image;
use App\Repositories\ImageRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{
    private $imageRepo;

    public function __construct(ImageRepository $imageRepo)
    {
        parent::__construct();
        $this->imageRepo = $imageRepo;
    }

    /**
     * Serve the generated image publicly.
     *
     * @param ConvertedStoreRequest $request
     * @param Bridge                $bridge
     * @param Image                 $image
     * @return \Illuminate\Http\JsonResponse
     */
    public function customSizeImageConverted(ConvertedStoreRequest $request, Bridge $bridge, Image $image)
    {
        try {
            $width = (int) $request->get('width');
            $height = (int) ($width / $image->width_ratio);
            $format = $request->get('format');

            $path = $this->imageRepo->generateImageConverted($bridge, $image, $width, $height, $format);

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
}
