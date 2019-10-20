<?php

use Illuminate\Http\Request;
Route::get('thu',function(){
    return view('adminMain.theloai.add');
});
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|users
*/
Route::post('khachhang','KhachHangController@store');

Route::get('products','ProductsController@index');
Route::get('products/{idproduct}','ProductsController@show');

Route::get('fruit','FruitController@index');
Route::get('fruit/{idfruit}','FruitController@show');


Route::get('stage','StageController@index');
Route::get('stage/{idfruit}','StageController@show1');


Route::get('productclassification','ProductClassificationController@index');
Route::get('productclassification/{id}','ProductClassificationController@show');

Route::get('productclassifications/{idfruit}','ProductClassificationController@show1');
Route::get('productclassificationss/{idfruit}/{idstage}','ProductClassificationController@show2');
Route::get('productclassificationsss/{idfruit}/{idstage}','ProductClassificationController@show3');

Route::get('systemClassificationProduct','SystemClassificationProductController@index');
Route::get('systemClassificationProduct/{id}','SystemClassificationProductController@show');


Route::get('skillfile','skillfileController@index');

Route::get('skillfile/{id}','skillfileController@show2');

Route::get('about','aboutController@index');
Route::get('about/{id}','aboutController@show');

Route::get('legislation','legislationController@index');
Route::get('legislation/{id}','legislationController@show');
