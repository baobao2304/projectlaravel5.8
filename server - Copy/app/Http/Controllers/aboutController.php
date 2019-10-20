<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\About;
class aboutController extends Controller
{
    public function index(){
        return About::all();
    }
    public function show($id){
        return About::find($id);
    }
 
    public function store(Request $request){
        return About::create($request->all());
    }

    public function update(Request $request,$id){
        $about = About::findOrFail($id);
        $about->update($request->all());

        return $about;
    }

    public function delete(Request $request,$id){
        $about=About::findOrFail($id);
        $about->delete();

        return 204; 
    }



    public function indexTableAbout(){
        $about = About::all();
        return view('adminMain.tables.aboutstable',['about'=>$about]
            );
    }
    public function showabouttable($id){
        $about = About::find($id);
        return view('adminMain.tables.suaaboutstable',['about'=>$about]);
    }
    public function storeAdd(Request $request){
        $about = new About;
        $about->id = $request->id;
        $about->image = $request->image;
        $about->save();
        return redirect('admin/tables/fruitstable');
     }
    public function postupdateabouttable(Request $request,$id){
        $about = About::find($id);
        $about->image = $request->image;
        $about->save();
        return redirect('admin/tables/suaaboutstable/'.$id);
    }
    public function deleteabouttable($id){
        $about = About::find($id);
        $about->delete();

        return redirect('admin/tables/aboutstable'); 
    }
}
