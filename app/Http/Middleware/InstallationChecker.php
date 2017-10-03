<?php

namespace App\Http\Middleware;

use Closure;
use Config;

class InstallationChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Config::get('logobridge.isInstalled'))
            return redirect(route('installation'));
        return $next($request);
    }
}
