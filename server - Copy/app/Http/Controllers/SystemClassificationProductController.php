<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SystemClassificationProduct;
class SystemClassificationProductController extends Controller
{
    public function index(){
        return SystemClassificationProduct::all();
    }
    public function show($id){
        return SystemClassificationProduct::find($id);
    }
    public function store(Request $request){
        return SystemClassificationProduct::create($request->all());
    }

    public function update(Request $request,$id){
        $systemclassificationproduct = SystemClassificationProduct::findOrFail($id);
        $systemclassificationproduct->update($request->all());

        return $systemclassificationproduct;
    }

    public function delete(Request $request,$id){
        $systemclassificationproduct=SystemClassificationProduct::findOrFail($id);
        $systemclassificationproduct->delete();

        return 204; 
    }

    
    
    
    public function indexTableSystemClassificationProduct(){
        $systemclassificationproduct = SystemClassificationProduct::all();
        return view('adminMain.tables.systemclassificationproductstable',['systemclassificationproduct'=>$systemclassificationproduct]
            );
    }
    public function showsystemclassificationproductstable($id){
        $systemclassificationproduct = SystemClassificationProduct::find($id);
        return view('adminMain.tables.suasystemclassificationproductstable',['systemclassificationproduct'=>$systemclassificationproduct]);
    }
    public function storeAdd(Request $request){
        $systemclassificationproduct = new SystemClassificationProduct;
        $systemclassificationproduct->province = $request->province;
        // $systemclassificationproduct->nuoc = $request->nuoc;
        // $systemclassificationproduct->tinh = $request->tinh;
        // $systemclassificationproduct->city = $request->city;
        $systemclassificationproduct->branchadress = $request->branchadress;
        $systemclassificationproduct->sdt = $request->sdt;
        $systemclassificationproduct->save();
        return redirect('admin/tables/systemclassificationproductstable');
     }
    public function postupdatesystemclassificationproductstable(Request $request,$id){
        $systemclassificationproduct = SystemClassificationProduct::find($id);
        $systemclassificationproduct->province = $request->province;
        // $systemclassificationproduct->nuoc = $request->nuoc;
        // $systemclassificationproduct->tinh = $request->tinh;
        // $systemclassificationproduct->city = $request->city;
        $systemclassificationproduct->branchadress = $request->branchadress;
        $systemclassificationproduct->sdt = $request->sdt;
        $systemclassificationproduct->save();
        return redirect('admin/tables/suasystemclassificationproductstable/'.$id);
    }
    public function deletesystemclassificationproductstable($id){
        $systemclassificationproduct = SystemClassificationProduct::find($id);
        $systemclassificationproduct->delete();

        return redirect('admin/tables/systemclassificationproductstable'); 
    }
}
