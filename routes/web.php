<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/master', function () {
    return view('master');
});

Route::get('/blo',[HomeController::class,'blo']);
// router seleect array come view
Route::get('/demo',[HomeController::class,'arraydemo'])->name('demo');
// router post data form
Route::post('/demo',[HomeController::class,'postDemoHome']);
// router link page
Route::get('/demoDetail',[HomeController::class,'demoDetail'])->name('demo_detail');
//
Route::get('/demogetdb',[CategoryController::class,'index'])->name('demogetdb');

Route::get('/add-category',[CategoryController::class,'add'])->name('add-category');
Route::post('/add-category',[CategoryController::class,'create']);


Route::get('/edit-category/{id}',[CategoryController::class,'edit'])->name('edit-category');
Route::post('/edit-category/{id}',[CategoryController::class,'update']);







