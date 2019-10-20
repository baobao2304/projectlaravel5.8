<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class UserAdminController extends Controller
{
    

    public function index(){
        return Admin::all();
    }
    public function show($id){
        return Admin::find($id);
    }
    public function store(Request $request){
        return Admin::create($request->all());
    }

    public function update(Request $request,$id){
        $useradmin = Admin::findOrFail($id);
        $useradmin->update($request->all());

        return $useradmin;
    }

    public function delete(Request $request,$id){
        $useradmin=Admin::findOrFail($id);
        $useradmin->delete();

        return 204; 
    }


    public function indexTableUseradmin(){
        $useradmin = Admin::all();
        return view('adminMain.tables.useradminstable',['useradmin'=>$useradmin]
            );
    }
    public function show3(){
        return view('dangnhap');
    }
    public function showuseradmintable($id){
        $useradmin = Admin::find($id);
        return view('adminMain.tables.suauseradminstable',['useradmin'=>$useradmin]);
    }
    public function storeAdd(Request $request){
        $useradmin = new Admin;
        $useradmin->userid = $request->userid;
        $useradmin->pass = $request->pass;
        $useradmin->mail = $request->mail;
        $useradmin->addadmin = $request->addadmin;
        $useradmin->save();
        return redirect('admin/tables/useradminstable');
     }
    public function postupdateuseradmintable(Request $request,$id){
        $useradmin = Admin::find($id);
        $useradmin->name = $request->name;
        $request->password = bcrypt('secret');
        $useradmin->password = $request->password; 
        $useradmin->email = $request->email;
        $useradmin->addadmin = $request->addadmin;
        $useradmin->save();
        return redirect('admin/tables/suauseradminstable/'.$id);
    }
    public function deleteuseradmintable($id){
        $useradmin = Admin::find($id);
        $useradmin->delete();

        return redirect('admin/tables/useradminstable'); 
    }
    
}
