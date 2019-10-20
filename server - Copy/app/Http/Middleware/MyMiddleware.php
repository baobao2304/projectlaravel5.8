<?php

namespace App\Http\Middleware;
// use Illuminate\Support\Facades\Auth;
use Closure;
// use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\UserAdmin;
use Auth;
class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null,$redirectTo = '/')
    {
        // cái này em muốn cho thằng admin cao nhất
        $id = Auth::guard($guard)->id();
        $query = DB::table('admins')
        ->where ('id','=',$id)
        ->select('admins.*')
        ->first();
        if(!Auth::guard($guard)->check() || $query->addadmin == 2)
        {
            return redirect($redirectTo);
            // dd($guard);
        }
        Auth::shouldUse($guard);
        return $next($request);
    }
}
