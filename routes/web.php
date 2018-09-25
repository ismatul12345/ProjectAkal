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

 Route::get('index', 'ControllerView@index')->name('showindex');
 Route::get('productdetail', 'ControllerView@productdetail')->name('showproductdetail');
 Route::get('beli', 'ControllerView@beli')->name('showbeli');
 Route::get('daftar', 'ControllerView@daftar')->name('showdaftar');
 Route::get('masuka', 'ControllerView@masuk')->name('showmasuk');

 //penjelasan
//index = nama yang buat di panggil atau di ketik di browser
 //ControllerView = nama Controllernya
 //index =  ada di nama function yang ada di controller view
 // showindex =nama pengganti route

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
