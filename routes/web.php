<?php
// routes for admin
Route::prefix("admin")->group(function (){
    include_once("admin.php");
});
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
//Route::METHOD(path_string,HANDLE_FUNCTION);
// Method: post get put delete ... CRUD

Route::get("/xin-chao",function (){
    echo "Chao tat ca moi nguoi";
});
/*
 * Luu ý
 * chạy URL trên  duyệt -> method GET
 */
Route::get("/","WebController@home");
// Route::METHOD(path_string,Controller@function_in_controller);
Route::get("/san-pham/{id}","WebController@product");
Route::get("/danh-muc/{id}","WebController@listing");
Route::get("/shopping/{id}","WebController@shopping");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
