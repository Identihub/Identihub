<?php

namespace App\Http\Controllers;
use Auth;

class FrontController
{

    public function welcome()
    {
        if(Auth::guest()){
            return view('auth/login');
        }
        else {
            header("Location: /app#/projects");
        }
    }

}
