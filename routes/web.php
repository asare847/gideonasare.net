<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
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

Route::get('/',[PostController::class,'index']);
Route::get('/checkout',function(){
    return view('checkout');
});
Route::get('/blog/{slug}',[PostController::class,'show']);
//Route::resource('/blog', [PostController::class]);

Route::get('/contact',[ContactController::class,'create']);
Route::post('/contact/store',[ContactController::class,'store']);