<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->email === 'adhishafwan@gmail.com' || Auth::user()->email === 'unknwn356@gmail.com' || Auth::user()->email==='qurrotulaini0325@gmail.com') {
            return $next($request);
        }
        abort(403, 'Unauthorized');
    }
}
