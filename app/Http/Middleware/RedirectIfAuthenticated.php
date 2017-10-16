<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $redirect
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $redirect = 'home' ,$guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(route($redirect));
        }

        return $next($request);
    }
}
