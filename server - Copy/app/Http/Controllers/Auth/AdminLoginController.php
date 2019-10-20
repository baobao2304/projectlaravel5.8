<?php

namespace App\Http\Controllers\Auth;
use Auth; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AdminLoginController extends Controller
{
    public function getIndex()
    {
        return view('nhapdiem');
    }
    public function __contruct(){
        // $this->middleware('MyMiddle',['except' => 'getLogout']); 
        $this->middleware('auth:admin');
    }
    public function showLoginForm(){
        // $this->middleware('MyMiddle',['except' => 'getLogout']); 
        return view('dangnhap');
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
                // return redirect('adddmin/home/dashboard');
                return "da dang nhap thanh ocng";
            }
        // return redirect()->back()->withInput($request->only('email','remember'));->intended(route('admin/dashboard'));
           return redirect('login');
    }
    public function getLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}

// namespace App\Http\Controllers\Auth;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

// class AdminLoginController extends Controller
// {
//     //
// }
// <?php
