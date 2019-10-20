<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
use App\Stage;


class StageController extends Controller
{
    public function index(){
        return Stage::all();
    }
    public function show($ids){
        return Stage::find($ids);
    }
    public function show1($idfruit){
        $query = DB::table('stage')->select('idstage','tenstage','namestage','mota')->where ('idfruit','=',$idfruit)->orderby('idstage', 'asc')->get();
        return Response::json($query);

   }
    public function store(Request $request){
        return Stage::create($request->all());
    }

    public function update(Request $request,$ids){
        $stage = Stage::findOrFail($idstage);
        $stage->update($request->all());

        return $stage;
    }
    public function delete(Request $request,$ids){
        $stage=Stage::findOrFail($ids);
        $stage->delete();

        return 204; 
    }


    
    public function indexTableStage(){
        $stage = Stage::all();
        return view('adminMain.tables.stagestable',['stage'=>$stage]
            );
    }
    public function showstagetable($ids){
        $stage = Stage::find($ids);
        return view('adminMain.tables.suastagestable',['stage'=>$stage]);
    }
    public function storeAdd(Request $request){
        $stage = new Stage;
        $stage->idfruit = $request->idfruit;
        $stage->idstage = $request->idstage;
        $stage->tenstage = $request->tenstage;
        $stage->namestage = $request->namestage;
        $stage->save();
        return redirect('admin/tables/stagestable');
     }
    public function postupdatestagetable(Request $request,$ids){
        $stage = Stage::find($ids);
        $stage->idfruit = $request->idfruit;
        $stage->idstage = $request->idstage;
        $stage->tenstage = $request->tenstage;
        $stage->namestage = $request->namestage;
        $stage->save();
        return redirect('admin/tables/suastagestable/'.$ids);
    }
    public function deletestagetable($ids){
        $stage = Stage::find($ids);
        $stage->delete();

        return redirect('admin/tables/stagestable'); 
    }
}
