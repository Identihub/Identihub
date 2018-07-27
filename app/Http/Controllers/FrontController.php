<?php

namespace App\Http\Controllers;

class FrontController
{
    /**
     * Home Page.
     */
    public function home()
    {
        if (auth()->guest()) {
            return redirect()->route('login');
        } else {
            return redirect('/app#/projects');
        }
    }

}
