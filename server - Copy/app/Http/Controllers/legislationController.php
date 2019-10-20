<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Legislation;
class legislationController extends Controller
{
    public function index(){
        return Legislation::all();
    }
    public function show($id){
        return Legislation::find($id);
    }
 
    public function store(Request $request){
        return Legislation::create($request->all());
    }

    public function update(Request $request,$id){
        $legislation = Legislation::findOrFail($id);
        $legislation->update($request->all());

        return $legislation;
    }

    public function delete(Request $request,$id){
        $legislation=Legislation::findOrFail($id);
        $legislation->delete();

        return 204; 
    }


    
    public function indexTableLegislationstable(){
        $legislation = Legislation::all();
        return view('adminMain.tables.legislationstable',['legislationstable'=>$legislation]
            );
    }
    public function showlegislationstable($id){
        $legislation = Legislation::find($id);
        return view('adminMain.tables.sualegislationstable',['legislationstable'=>$legislation]);
    }
    public function storeAdd(Request $request){
        $legislation = new Legislation;
        $legislation->image = $request->image;
        $legislation->type = $request->type;
        $legislation->save();
        return redirect('admin/tables/legislationstable');
     }
    public function postupdatelegislationstable(Request $request,$id){
        $legislation = Legislation::find($id);
        $legislation->image = $request->image;
        $legislation->type = $request->type;
        $legislation->save();
        return redirect('admin/tables/sualegislationstable/'.$id);
    }
    public function deletelegislationstable($id){
        $legislation = Legislation::find($id);
        $legislation->delete();

        return redirect('admin/tables/legislationstable'); 
    }
}
