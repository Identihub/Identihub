<?php

namespace App\Http\Controllers;


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