<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;

class ArticaleController extends Controller
{
    public function list(){
        $articales = Artical :: all(); //select *
        return view('articale.list',['art'=> $articales]);
    }
    public function create()
    {
        return view('articale.create');
    }
    public function save(Request $request)
    {
        $articale = new Artical;
        $articale-> fk_id = $request-> fk_id;
        $articale->name = $request -> name;
        $articale->details = $request -> details;
        $articale->slug = $request -> slug;
        $articale->is_used = $request -> is_used;
        $articale-> save();
        return redirect()->route('articale.list');
    }
    public function delete($id)
    {
        $articale = Artical :: find($id);
        if($articale){
            $articale->delete();
        }
        return redirect()->route('articale.list');
    }
    public function show($id){
        $articale = Artical :: find($id);
        
        return view("articale.show", ['art' => $articale]);
    }
    public function show_data($id){
        $articale = Artical :: find($id);
        return view("articale.showdata", ['art' => $articale]);
    }
    public function save_data(Request $request)
    {
        $articale =  Artical :: find($request->id);
        $articale-> fk_id = $request-> fk_id;
        $articale->name = $request -> name;
        $articale->details = $request -> details;
        $articale->slug = $request -> slug;
        $articale->is_used = $request -> is_used;
        $articale-> save();
        return redirect()->route('articale.list');
    }
}
