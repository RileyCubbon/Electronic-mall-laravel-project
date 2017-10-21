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
        Route::resource('managers','ManagersController',['only' => [
            'index','create','store','edit','update','destroy'
        ]]);
        Route::resource('roles','RolesController',[ 'names'=> [ 'show' => 'roles.verify']]);
        Route::resource('authorities','AuthoritiesController',[ 'only' => [
            'index','create','store','destroy'
        ]]);

        Route::get('/','IndexController@index')->name('admins.index');
        Route::get('/index','IndexController@right')->name('admins.right');
    });
    Route::get('/login','Auth\LoginController@showLoginForm')->name('admins.login.show');
    Route::post('/login','Auth\LoginController@login')->name('admins.login.check');
    Route::get('/logout','Auth\LoginController@logout')->name('admins.logout');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');