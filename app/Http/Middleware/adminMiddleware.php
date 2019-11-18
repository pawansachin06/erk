<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class adminMiddleware {

    public function handle($request, Closure $next, $guard = null) {
        if (Auth::user()->role ==0) {
            return redirect('/');
        }
        return $next($request);
    }

}
