<?php

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

Auth::routes();
Route::auth();
Route::get('dashboard','FruitController@indexDashboard')->name('admin/home/dashboard');
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');



Route::post('admin/login', 'Admin\Auth\AdminLoginController@login');
Route::get('/', 'Admin\Auth\LoginController@showLoginForm');
Route::post('admin/logout', 'Admin\Auth\AdminLoginController@logout');


Route::get('admin/register', 'Admin\Auth\RegisterController@showRegistrationForm');
Route::post('admin/register', 'Admin\Auth\RegisterController@register')->name('admin.register');

// Route::group(['prefix'=>'adminchild','middleware'=>'isAdmin:admin,/' ],function(){
Route::group(['prefix'=>'adminchild','middleware'=>'isAdmin:admin,/' ],function(){
    Route::get('home', 'AdminController@getindex');
    // Route::group(['prefix'=>'home'],function(){
    //     Route::get('dashboard','FruitController@indexDashboard')->name('admin/home/dashboard');
    // });
   Route::group(['prefix'=>'chart'],function(){
        Route::get('chartandgrap','FruitController@indexChartandGrap');
    });
});

// Route::group(['prefix'=>'admin' ,'middleware'=>'MyMiddle:admin,/'],function(){
Route::group(['prefix'=>'admin' ,'middleware'=>'MyMiddle:admin,/'],function(){
    Route::get('home', 'AdminController@getindex');
    Route::group(['prefix'=>'home'],function(){
        Route::get('dashboard','FruitController@indexDashboard')->name('admin/home/dashboard');
    });
    Route::group(['prefix'=>'chart'],function(){
        Route::get('chartandgrap','FruitController@indexChartandGrap');
    });
    
    Route::group(['prefix'=>'tables'],function(){
        Route::get('fruitstable','FruitController@indexTableFruit');
        Route::post('fruitstable','FruitController@storeAdd');
        
        Route::get('suafruitstable/{idfruit}','FruitController@showfruittable');
        Route::post ('suafruitstable/{idfruit}','FruitController@postupdatefruittable');
        Route::get('xoafruitstable/{idfruit}','FruitController@deletefruittable');
        // ----------------------------
        Route::get('productstable','ProductsController@indexTableProduct');
        Route::post('productstable','ProductsController@storeAdd');
        
        Route::get('suaproductstable/{idproduct}','ProductsController@showproducttable');
        Route::post ('suaproductstable/{idproduct}','ProductsController@postupdateproducttable');
        Route::get('xoaproductstable/{idproduct}','ProductsController@deleteproducttable');
        // ----------------------------
        Route::get('aboutstable','aboutController@indexTableAbout');
        Route::post('aboutstable','aboutController@storeAdd');
        
        Route::get('suaaboutstable/{idproduct}','aboutController@showabouttable');
        Route::post ('suaaboutstable/{idproduct}','aboutController@postupdateabouttable');
        Route::get('xoaaboutstable/{idproduct}','aboutController@deleteabouttable');
        // ----------------------------
        Route::get('stagestable','StageController@indexTableStage');
        Route::post('stagestable','StageController@storeAdd');
        
        Route::get('suastagestable/{ids}','StageController@showstagetable');
        Route::post ('suastagestable/{ids}','StageController@postupdatestagetable');
        Route::get('xoastagestable/{ids}','StageController@deletestagetable');
        // ----------------------------
        Route::get('productclassificationstable','ProductClassificationController@indexTableProductclassifications');
        Route::post('productclassificationstable','ProductClassificationController@storeAdd');
        
        Route::get('suaproductclassificationstable/{id}','ProductClassificationController@showproductclassificationtable');
        Route::post ('suaproductclassificationstable/{id}','ProductClassificationController@postupdateproductclassificationtable');
        Route::get('xoaproductclassificationstable/{id}','ProductClassificationController@deleteproductclassificationtable');
        // ----------------------------
        Route::get('systemclassificationproductstable','SystemClassificationProductController@indexTableSystemClassificationProduct');
        Route::post('systemclassificationproductstable','SystemClassificationProductController@storeAdd');
        
        Route::get('suasystemclassificationproductstable/{id}','SystemClassificationProductController@showsystemclassificationproductstable');
        Route::post ('suasystemclassificationproductstable/{id}','SystemClassificationProductController@postupdatesystemclassificationproductstable');
        Route::get('xoasystemclassificationproductstable/{id}','SystemClassificationProductController@deletesystemclassificationproductstable');
        // ----------------------------
        Route::get('legislationstable','legislationController@indexTableLegislationstable');
        Route::post('legislationstable','legislationController@storeAdd');
        
        Route::get('sualegislationstable/{id}','legislationController@showlegislationstable');
        Route::post ('sualegislationstable/{id}','legislationController@postupdatelegislationstable');
        Route::get('xoalegislationstable/{id}','legislationController@deletelegislationstable');
        // ----------------------------





        
        Route::get('useradminstable','UserAdminController@indexTableUseradmin');
        Route::post('useradminstable','UserAdminController@storeAdd');
        
        Route::get('suauseradminstable/{id}','UserAdminController@showuseradmintable');
        Route::post ('suauseradminstable/{id}','UserAdminController@postupdateuseradmintable');
        Route::get('xoauseradminstable/{id}','UserAdminController@deleteuseradmintable');
        // ----------------------------
        Route::get('khachhangstable','KhachHangController@indexTableKhachhangstable');
        Route::post('khachhangstable','KhachHangController@storeAdd');
        
        Route::get('suakhachhangstable/{id}','KhachHangController@showkhachhangstable');
        Route::post ('suakhachhangstable/{id}','KhachHangController@postupdatekhachhangstable');
        Route::get('xoakhachhangstable/{id}','KhachHangController@deletekhachhangstable');
        // ----------------------------
        Route::get('skillfilestable','skillfileController@indexTableSkillfile');
        Route::post('skillfilestable','skillfileController@storeAdd');
        
        Route::get('suaskillfilestable/{id}','skillfileController@showskillfilestable');
        Route::post ('suaskillfilestable/{id}','skillfileController@postupdateskillfilestable');
        Route::get('xoaskillfilestable/{id}','skillfileController@deleteskillfilestable');
         // ----------------------------
        //  Route::get('adminchild','KhachHangController@indexTableSkillfile');
        //  Route::post('adminchild','KhachHangController@storeAdd');//chua xu ly addadmin cho cái này
    });
});