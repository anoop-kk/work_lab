<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfUserAuthenticated
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
        $role = 'user';
        //dd(Auth::user()->roles);
        $role = (count(Auth::user()->roles)>0)?Auth::user()->roles->first()->name:'user';
        
        if($role == 'user'){
            return $next($request);
        }
        return redirect('login');
    }
}
