<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Zizaco\Entrust\EntrustRole;
use App\Models\Role;
class RedirectIfAdminAuthenticated
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
        $role='';
        $role = Auth::user()->roles->first()->name;
        
        if($role == 'admin'){
            return $next($request);
        }
      
         return redirect('login');
        

    }
}
