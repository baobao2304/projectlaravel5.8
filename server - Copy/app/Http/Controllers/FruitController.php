<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Response;
use App\Fruit;
use Auth; 
use App\Http\Controllers\Controller;
class FruitController extends Controller
{
    public function __contruct(){
        // $this->middleware('MyMiddle',['except' => 'getLogout']); 
        $this->middleware('auth:admin');
    }
    public function index(){
        return Fruit::all();
    }
    public function indexTableFruit(){
        $fruittable = Fruit::all();
        return view('adminMain.tables.fruitstable',['fruits'=>$fruittable]);
        // return view('adminMain.tables.fruitstable');
    }
    public function indexDashboard(){
        return view('adminMain.layout.index');
    }
    public function indexChartandGrap(){
        return view('adminMain.chartandgrap.chartandgrap');
    }
    public function show($idfruit){
        return Fruit::find($idfruit);
    }
    public function showfruittable($idfruit){
        $fruit = Fruit::find($idfruit);
        return view('adminMain.tables.suafruitstable',['fruits'=>$fruit]);
    }
    public function store(Request $request){
        return Fruit::create($request->all());
    }
    public function storeAdd(Request $request){
        if(Auth::guard('admin')->check())
        {
            $fruits = new Fruit;
            $fruits->idfruit = $request->idfruit;
            $fruits->tenfruit = $request->tenfruit;
            $fruits->namefruit = $request->namefruit;
            $fruits->save();
            return redirect('admin/tables/fruitstable');
        }
        // $fruits = new Fruit;
        // $fruits->idfruit = $request->idfruit;
        // $fruits->tenfruit = $request->tenfruit;
        // $fruits->namefruit = $request->namefruit;
        // $fruits->save();
        // return redirect('admin/tables/fruitstable');
     }
    public function update(Request $request,$idfruit){
        $fruit = Fruit::findOrFail($idfruit);
        $fruit->update($request->all());
        return $fruit;
    }
    public function postupdatefruittable(Request $request,$idfruit){
        
        $fruit = Fruit::find($idfruit);
        $fruit->idfruit = $request->idfruit;
        $fruit->tenfruit = $request->tenfruit;
        $fruit->namefruit = $request->namefruit;
        $fruit->save();
        return redirect('admin/tables/suafruitstable/'.$idfruit);
    }
    public function delete(Request $request,$idfruit){
        $fruit = Fruit::find($idfruit);
        $fruit->delete();

        return 204; 
    }
    public function deletefruittable($idfruit){
        $fruit = Fruit::find($idfruit);
        $fruit->delete();

        return redirect('admin/tables/fruitstable'); 
    }
}
