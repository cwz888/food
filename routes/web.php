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
});
//菜品添加
Route::prefix('/cuisine')->group(function(){
    Route::any('add','Admin\CuisineController@add');//菜品添加页面
    Route::any('create','Admin\CuisineController@create');//添加执行
    Route::any('list','Admin\CuisineController@list');//添加执行
});
// 菜品种类
Route::prefix('/cetemeun')->group(function(){
	Route::any('add','Admin\CatemenuController@add');//菜品种类添加
	Route::any('adddo','Admin\CatemenuController@adddo');//执行添加
	Route::any('list','Admin\CatemenuController@list');//列表
    
});
