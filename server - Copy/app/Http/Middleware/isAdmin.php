<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;
class isAdmin
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
        if(Auth::guard($guard)->check())
        {
            $id = Auth::guard($guard)->id();
                $query = DB::table('admins')
                ->where ('id','=',$id)
                ->select('admins.*')
                ->first();
                if($query->addadmin==2)
                    {
                        Auth::shouldUse($guard);
                        return $next($request);
                    }
                
        }
        return redirect($redirectTo);

    }
}