<?php

use Illuminate\Support\Facades\Route;

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
Route::group(["middleware"=>"web"],function(){
Route::get("/","RestroController@index");
Route::get("/list","RestroController@list");
Route::view("/add","add");
Route::post("/add","RestroController@add");
Route::get("/delete/{id}","RestroController@delete");
Route::get("/edit/{id}","RestroController@edit");
Route::post("/edit","RestroController@update");
Route::view("/register","register");
Route::post("/register","RestroController@register");
Route::view("/login","login");
Route::post("/login","RestroController@login");
});
Route::get('/logout', function () {
        Session::forget("user");
        return redirect('/login');
});
