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

Auth::routes();



Route::group(['middleware'=>'auth'],function(){
    //menampilkan halaman dashboard
    Route::get('/dashboard',function(){
        return view('dashboard');
    });
    //Route Data Pegawai
    //menampilkan halaman data pegawai
    Route::get('/pegawai','PegawaiController@index');
    //tambah data
    Route::get('/pegawai/create','PegawaiController@ShowFormCreate');
    Route::post('/pegawai/creating','PegawaiController@creating')->name('post_datapegawai');;

    //home bawaan laravel
    Route::get('/home', 'HomeController@index')->name('home');
});
