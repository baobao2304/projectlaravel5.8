<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Skillfile;
class skillfileController extends Controller
{
    public function index(){
        return Skillfile::all();
    }
    public function show($id){
        return Skillfile::find($id);
    }
    public function show2($idfruit){
        $query = DB::table('skillfile')->where ('idfruit','=',$idfruit)->get();
        return Response::json($query);

   }
    public function store(Request $request){
        return Skillfile::create($request->all());
    }

    public function update(Request $request,$id){
        $skillfile = Skillfile::findOrFail($id);
        $skillfile->update($request->all());

        return $skillfile;
    }

    public function delete(Request $request,$id){
        $skillfile=Skillfile::findOrFail($id);
        $skillfile->delete();

        return 204; 
    }

    public function indexTableSkillfile(){
        $skillfiles = Skillfile::all();
        // dd($skillfile);
        return view('adminMain.tables.skillfilestable',['skillfiles'=>$skillfiles]
            );
    }
    public function showskillfilestable($id){
        $skillfile = Skillfile::find($id);
        return view('adminMain.tables.suaskillfilestable',['skillfile'=>$skillfile]);
    }
    public function storeAdd(Request $request){
        $skillfile = new Skillfile;
        $skillfile->idfruit = $request->idfruit;
        $skillfile->image = $request->image;
        $skillfile->save();
        return redirect('admin/tables/skillfilestable');
     }
    public function postupdateskillfilestable(Request $request,$id){
        $skillfile = Skillfile::find($id);
        $skillfile->idfruit = $request->idfruit;
        $skillfile->image = $request->image;
        $skillfile->save();
        return redirect('admin/tables/suaskillfilestable/'.$id);
    }
    public function deleteskillfilestable($id){
        $skillfile = Skillfile::find($id);
        $skillfile->delete();

        return redirect('admin/tables/skillfilestable'); 
    }
}
