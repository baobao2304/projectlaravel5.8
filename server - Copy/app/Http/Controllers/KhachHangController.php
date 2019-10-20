<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
class KhachHangController extends Controller
{
    public function index(){
        return KhachHang::all();
    }
    public function show($id){
        return KhachHang::find($id);
    }
    public function store(Request $request){
        return KhachHang::create($request->all());
    }

    public function update(Request $request,$id){
        $khachhang = KhachHang::findOrFail($id);
        $khachhang->update($request->all());

        return $khachhang;
    }

    public function delete(Request $request,$id){
        $khachhang=KhachHang::findOrFail($id);
        $khachhang->delete();

        return 204; 
    }


    public function indexTableKhachhangstable(){
        $khachhang = KhachHang::all();
        return view('adminMain.tables.khachhangstable',['khachhang'=>$khachhang]);
    }
    public function showkhachhangstable($id){
        $khachhang = KhachHang::find($id);
        return view('adminMain.tables.suakhachhangstable',['khachhangstable'=>$khachhang]);
    }
    public function storeAdd(Request $request){
        $khachhang = new KhachHang;
        $khachhang->tenuser = $request->tenuser;
        $khachhang->numberphone = $request->numberphone;
        $khachhang->mail = $request->mail;
        $khachhang->addadmin = $request->addadmin;
        $khachhang->save();
        return redirect('admin/tables/khachhangstable');
     }
    public function postupdatekhachhangstable(Request $request,$id){
        $khachhang = KhachHang::find($id);
        $khachhang->tenuser = $request->tenuser;
        $khachhang->numberphone = $request->numberphone;
        $khachhang->mail = $request->mail;
        $khachhang->addadmin = $request->addadmin;
        $khachhang->save();
        return redirect('admin/tables/suakhachhangstable/'.$id); 
    }
    public function deletekhachhangstable($id){
        $khachhang = KhachHang::find($id);
        $khachhang->delete();

        return redirect('admin/tables/khachhangstable'); 
    }
}
