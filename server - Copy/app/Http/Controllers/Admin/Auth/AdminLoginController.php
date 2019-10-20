<?php

namespace App\Http\Controllers\Admin\Auth;
use Auth; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Admin;
use Response;
class AdminLoginController extends Controller
{
  
    public function getIndex()
    {
        return view('nhapdiem');
    }
    public function __contruct(){
        // $this->middleware('MyMiddle',['except' => 'getLogout']); 
        $this->middleware('guest:admin,admin/home/dashboard')->except('logout');
    }
    public function showLoginForm(){
        // $this->middleware('MyMiddle',['except' => 'getLogout']); 
        return view('dangnhap');
    }
    public function login(Request  $request)
    {
            
            if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password],$request->remember))
                {
                    $query = DB::table('admins')
                    ->where ('email','=',$request->email)
                    ->select('admins.*')
                    ->first();
                    if($query->addadmin==1)
                        return redirect('admin/home/dashboard');
                    if($query->addadmin==2)
                        return redirect('adminchild/chart/chartandgrap');
                    // dd(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password],$request->remember));
                    
                    // return "da dang nhap thanh ocng";
                }
        // return redirect()->back()->withInput($request->only('email','remember'));->intended(route('admin/dashboard'));
           return redirect('/');
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/'); 
    }
    // public function getLogout()
    // {
    //     Auth::guard('admin')->logout();
    //     return redirect('admin/login');
    // }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}