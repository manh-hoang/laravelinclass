<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //demo link page
    public function demoHome(){
        return view('demoHome');
    }
    public function demoDetail(){
        return view('welcome');
    }
    // post data at form demoHome
    public function postDemoHome(Request $request)
    {
        dd($request->all());
    }

    // select data at product on view demoHome
    public function arraydemo(){
        $product=[
            ['name'=>'sp1'],
            ['name'=>'sp1'],
            ['name'=>'sp3'],
            ['name'=>'sp4'],
            ['name'=>'sp5']

        ];
        return view('demoHome',compact('product'));
    }
}
 
    

