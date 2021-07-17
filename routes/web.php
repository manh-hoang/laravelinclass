<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin\DashboardController;






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
//router admin
Route::group(['prefix'=>'admin'],function(){
    //router category
    Route::get('/add-category',[CategoryController::class,'add'])->name('add-category');
    Route::post('/add-category',[CategoryController::class,'create']);
    Route::get('/edit-category/{id}',[CategoryController::class,'edit'])->name('edit-category');
    Route::post('/edit-category/{id}',[CategoryController::class,'update']);
    Route::get('/delete-category/{id}',[CategoryController::class,'delete'])->name('edit-category');
    Route::get('/add/{id}',[CategoryController::class,'delete'])->name('edit-category');


    //route product 
    Route::resource('product', ProductController::class);


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






Route::get('/upload',[uploadController::class,'upload'])->name('upload');
Route::post('/upload',[uploadController::class,'postUpload']);










