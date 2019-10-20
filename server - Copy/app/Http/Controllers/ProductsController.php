<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class ProductsController extends Controller
{
    public function index(){
        return Products::all();
    }
    
    public function show($idproduct){
        return Products::find($idproduct);
    }
    public function store(Request $request){
        return Products::create($request->all());
    }

    public function update(Request $request,$idproduct){
        $products = Products::findOrFail($idproduct);
        $products->update($request->all());

        return $products;
    }

    public function delete(Request $request,$idproduct){
        $products=Products::findOrFail($idproduct);
        $products->delete();

        return 204; 
    }



    
    
    
    public function indexTableProduct(){
        $product = Products::all();
        return view('adminMain.tables.productstable',['products'=>$product]
            );
    }
    public function showproducttable($idproduct){
        $products = Products::find($idproduct);
        return view('adminMain.tables.suaproductstable',['products'=>$products]);
    }
    public function storeAdd(Request $request){
        $products = new Products;
        $products->idproduct = $request->idproduct;
        $products->tenproduct = $request->tenproduct;
        $products->nameproduct = $request->nameproduct;
        $products->pathproduct1 = $request->pathproduct1;
        $products->pathproduct2 = $request->pathproduct2;
        $products->pathproduct3 = $request->pathproduct3;
        $products->pathproduct4 = $request->pathproduct4;
        $products->pathproduct5 = $request->pathproduct5;
        $products->pathproduct6 = $request->pathproduct6;
        $products->pathproduct7 = $request->pathproduct7;
        $products->save();
        return redirect('admin/tables/productstable');
     }
    public function postupdateproducttable(Request $request,$idproduct){
        $products = Products::find($idproduct);
        $products->idproduct = $request->idproduct;
        $products->tenproduct = $request->tenproduct;
        $products->nameproduct = $request->nameproduct;
        $products->pathproduct1 = $request->pathproduct1;
        $products->pathproduct2 = $request->pathproduct2;
        $products->pathproduct3 = $request->pathproduct3;
        $products->pathproduct4 = $request->pathproduct4;
        $products->pathproduct5 = $request->pathproduct5;
        $products->pathproduct6 = $request->pathproduct6;
        $products->pathproduct7 = $request->pathproduct7;
        $products->save();
        return redirect('admin/tables/suaproductstable/'.$idproduct);
    }
    public function deleteproducttable($idproduct){
        $products = Products::find($idproduct);
        $products->delete();

        return redirect('admin/tables/productstable'); 
    }
}
