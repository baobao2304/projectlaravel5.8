<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ProductClassification;
use Response;
class ProductClassificationController extends Controller
{
    public function index(){
        return ProductClassification::all();
    }
    public function show($id){
        return ProductClassification::find($id);
    }
    public function show1($idfruit){
         $query = DB::table('productclassification')->select('idstage','id','idproduct')->where ('idfruit','=',$idfruit)->get();
         return Response::json($query);

    }
    public function show2($idfruit,$idstage){
        $query = DB::table('productclassification')->select('idfruit','idstage','idproduct')->where ('idfruit','=',$idfruit)->where('idstage','=',$idstage)->get();
        return Response::json($query);

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
    public function store(Request $request){
        return ProductClassification::create($request->all());
    }

    public function update(Request $request,$id){
        $productclassification = ProductClassification::findOrFail($id);
        $productclassification->update($request->all());

        return $productclassification;
    }

    public function delete(Request $request,$id){
        $productclassification=ProductClassification::findOrFail($id);
        $productclassification->delete();

        return 204; 
    }


    public function indexTableProductclassifications(){
        $productclassification = ProductClassification::all();
        return view('adminMain.tables.productclassificationstable',['productclassification'=>$productclassification]
            );
    }
    public function showproductclassificationtable($id){
        $productclassification = ProductClassification::find($id);
        return view('adminMain.tables.suaproductclassificationstable',['productclassification'=>$productclassification]);
    }
    public function storeAdd(Request $request){
        $productclassification = new ProductClassification;
        $productclassification->id = $request->id;
        $productclassification->idfruit = $request->idfruit;
        $productclassification->idstage = $request->idstage;
        $productclassification->idproduct = $request->idproduct;
        $productclassification->save();
        return redirect('admin/tables/productclassificationstable');
     }
    public function postupdateproductclassificationtable(Request $request,$id){
        $productclassification = ProductClassification::find($id);
        $productclassification->id = $request->id;
        $productclassification->idfruit = $request->idfruit;
        $productclassification->idstage = $request->idstage;
        $productclassification->idproduct = $request->idproduct;
        $productclassification->save();
        return redirect('admin/tables/suaproductclassificationstable/'.$id);
    }
    public function deleteproductclassificationtable($id){
        $productclassification = ProductClassification::find($id);
        $productclassification->delete();

        return redirect('admin/tables/productclassificationstable'); 
    }
}
