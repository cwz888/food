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

Route::get('/', function () {
    return view('welcome');
});

//外卖后台
Route::prefix('/admin')->group(function(){
	Route::any('index','Admin\IndexController@index');//后台首页
    Route::any('add','Admin\IndexController@add');//测试添加页面
});
