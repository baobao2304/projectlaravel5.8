<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Response;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::guard('users')->attempt(['name'=>$request->userid,'password'=>$request->password]))
            return redirect('admin/home/dashboard');
        else
            return redirect('dangnhap');
    //     $array = []; 
    //     $query = [];
    //  $query = 
    //  DB::table('useradmin')
    //  ->where ('userid','=',$request->name)
    //  ->where('pass','=',$request->password)
    //  ->get();
    //  $data = query($query);
    //  if(check($data))
    //     return redirect('admin/home/dashboard');
        // if(Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
        //     return redirect('admin/home/dashboard');
        //  } else {
        //    // invalid credentials, act accordingly
        //    return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
        // }    
    //  foreach ($query as $p) {
    //              $data = DB::table('useradmin')
    //              ->where('product.idproduct','=',$p->idproduct)
    //              ->first();
    //              array_push($array, $data); 
    //  }
    }
}
