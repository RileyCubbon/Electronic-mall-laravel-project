<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!\Auth::guard('manager')->check())
        {
            return redirect(route('admins.login.show'));
        }

        return $next($request);
    }
}
