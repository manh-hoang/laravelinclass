<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $listCategory = Category::all();
        dd($listCategory);
    }  
    public function add(){
        $listCategory = Category::all();
        return view('admin.page.addCategory',compact('listCategory'));
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required|unique:category|max:255',
            
        ]);
        $category = Category::create($request->all());
        if($category){
            return redirect('admin/add-category');
            return;
        }
        else{
            dd('eror');
        }
    }
    public function edit($id){
        //dd($id);
        $categoryID=Category::find($id);
        //dd($categoryID);
        return view ('admin.page.editCategory',compact('categoryID'));
        
    }
    public function update(Request $req , $id){
        $categoryID=Category::find($id);
        $categoryID->update($req->all());
        if($categoryID){
            return redirect('admin/add-category')->with('thongbao','sua thanh cong');
        }
        else{
            dd('eror');
        }

    }

    public function delete($id){
        $categoryID=Category::find($id);
         $categoryID->delete();
        return redirect()->back();

    }
 }
