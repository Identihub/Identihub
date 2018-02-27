<?php

namespace App\Http\Controllers;
use Auth;

class FrontController
{

    public function welcome()
    {
        return view('welcome');
    }

}
