<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //show or list db
    public function list(){
        $cateogries = Category :: all(); //select *
        return view('category.list',['cat'=> $cateogries]);
    }
    public function create()
    {
        return view('category.create');
    }
    public function save(Request $request)
    {
        $catergory = new Category;
        $catergory->name = $request -> name;
        $catergory-> save();
        return redirect()->route('category.list');
    }
    public function delete($id)
    {
        $category = Category :: find($id);
        if($category){
            $category->delete();
        }
        return redirect()->route('category.list');
    }
    public function show($id){
        $category = Category :: find($id);
        
        return view("category.show", ['cat' => $category]);
    }
    public function show_data($id){
        $category = Category :: find($id);
        return view("category.showdata", ['cat' => $category]);
    }
    public function save_data(Request $request)
    {
        $catergory =  Category :: find($request->id);
        $catergory->name = $request -> name;
        $catergory-> save();
        return redirect()->route('category.list');
    }
    
}
