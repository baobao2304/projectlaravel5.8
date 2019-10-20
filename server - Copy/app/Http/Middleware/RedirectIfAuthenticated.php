<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Response;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Admin;
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
       
        if(Auth::guard($guard)->check()){
            $id = Auth::guard($guard)->id();
            $query = DB::table('admins')
            ->where ('id','=',$id)
            ->select('admins.*')
            ->first();
            if($query->addadmin==2)
                return redirect('adminchild/chart/chartandgrap');
            if($query->addadmin==1)
                return redirect('admin/home/dashboard');
        }
        return $next($request);
    }
}
