<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'Home\IndexController@index');

Route::get('admin', 'Admin\IndexController@index');

//前台用户管理
Route::get('home/user', 'Home\UserController@index');


// 后台用户管理
Route::get('admin/user', 'Admin\UserController@index');
Route::get('admin/user/create', 'Admin\UserController@create');
Route::post('admin/user', 'Admin\UserController@store');

Route::get('admin/user/destroy/{id}', 'Admin\UserController@destroy');
Route::get('admin/user/edit/{id}', 'Admin\UserController@edit');
Route::post('admin/user/update/{id}', 'Admin\UserController@update');


// 后台视频管理
Route::get('admin/vedio', 'Admin\VedioController@index');
Route::get('admin/vedio/create', 'Admin\VedioController@create');


// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

