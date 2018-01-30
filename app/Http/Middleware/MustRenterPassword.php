<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MustRenterPassword
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {           
            return redirect('/verify-password');
        }

        if(route('verify-password') && Hash::check($request->input('rentered-password'), $hashedPassword) ){
            
            return Route::currentRouteAction();

        }

        return $next($request);
    }
}
