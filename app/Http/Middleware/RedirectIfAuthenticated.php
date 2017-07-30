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
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //dd(Auth::guard($guard)->check() && Auth::user()->role == 2);
        
        if (Auth::guard($guard)->check()) {
            
            $path = $role=(Auth::user()->roles)?Auth::user()->roles->first()->name:'';
           // if($role == 'user'){
                
                return redirect($path.'/home');
//            }else if($role == 'admin'){
//                return redirect('admin/home');
//            }
            
        }

        return $next($request);
    }
}
