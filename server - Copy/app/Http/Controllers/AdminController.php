<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\KhachHang;
use Response;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function getIndex()
    {
        // return view('adminMain.layout.index');
        return view('admin.layouts.master');
    }
    public function __contruct(){
        // $this->middleware('MyMiddle',['except' => 'getLogout']); 
        $this->middleware('isAdmin');
    }
    public function login(Request  $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password],$request->remember))
            {
                // dd(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password],$request->remember));
                // return redirect()->intended(route('admin/dashboard'));
                return redirect('admin/dashboard');
            }
        // return redirect()->back()->withInput($request->only('email','remember'));
           return redirect('login');
    }
    public function getLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function show3($idfruit,$idstage){
        $array = [];
        $query = [];
     $query = 
     DB::table('productclassification')
     ->where ('idfruit','=',$idfruit)
     ->where('idstage','=',$idstage)
     ->get();
     foreach ($query as $p) {
          
                 $data = DB::table('product')
                 ->where('product.idproduct','=',$p->idproduct)
                 ->first();
                 array_push($array, $data);       
         }
     return Response::json($array);
 
 }
}
