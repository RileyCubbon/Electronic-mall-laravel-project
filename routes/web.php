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

Route::group(['namespace'=>'Admin','prefix'=>'admins',],function () {
    Route::group(['middleware'=>'manager'],function () {
        Route::resource('managers','ManagerController',[
            'only'=>['index','create','store','edit','update'],
        ]);
        Route::get('/','IndexController@index')->name('admins.index');
    });
    Route::get('/login','Auth\LoginController@showLoginForm')->name('admins.login.show');
    Route::post('/login','Auth\LoginController@login')->name('admins.login.check');
});

Auth::routes();

Route::get('/test',function () {
    return view('admin.index.login');
});

Route::get('/home','HomeController@index')->name('home');