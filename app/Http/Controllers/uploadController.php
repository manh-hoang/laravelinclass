<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function upload(){
        return view('upload');
    }


    public function postUpload(Request $req){
       
        $req->validate([
            'myfile' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
            
        ]);
        // dd($req->myfile);
        $file =$req->myfile;
        // dd($file);

        $file_name=$file->getClientOriginalName();
       //dd($file_name);
       //$file->move("D:\xampp\php\laravel\hello-laravel\storage\app/public/myfile",$file_name);

        $file->move(public_path('images\product'),$file_name);
        return redirect()->back();

    }
}
