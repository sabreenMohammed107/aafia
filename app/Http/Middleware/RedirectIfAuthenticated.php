<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      
        if (Auth::guard($guard)->check()) {
           
                return redirect('/');
            }
     

        return $next($request);
      

    //     if (!Auth::check()) // I included this check because you have it, but it really should be part of your 'auth' middleware, most likely added as part of a route group.
    //     return redirect('/');

    // $user = Auth::user();

   
    // if($user->hasRole('super_admin')){
    //     dd('ss');
    //     return $next($request);
    //     }
    // return redirect('/');
    }


    
}
