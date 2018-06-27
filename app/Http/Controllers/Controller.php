<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $view;
    protected $auth;
    protected $redirect;
    protected $url;

    public function __construct()
    {
        $this->view = app('view');
        $this->auth = app('auth');
        $this->redirect = app('redirect');
        $this->url = app('url');
    }

    /**
     * Simple predefined json response.
     *
     * @param        $success
     * @param string $message
     * @param null   $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function simple_json($success, $message = null, $data = null)
    {
        return response()->json([
            'success' => $success,
            'message' => $message,
            'data'    => $data,
        ]);
    }
}
