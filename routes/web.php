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

//jika tidak ingin ada menu register
// Auth::routes(['register'=>false]);

//membuat login sendiri
Route::get('/user/login','AuthController@ShowFormLogin')->name('login');
Route::post('/user/user_login','AuthController@UserLogin');
//logout
Route::get('/user/logout','AuthController@UserLogout');


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
    Route::post('/pegawai/creating','PegawaiController@creating')->name('post_datapegawai');
    //view detail data pegawai
    Route::get('/pegawai/{id}/view_detail','PegawaiController@detail');
    //update data pegawai
    Route::get('/pegawai/{id}/update','PegawaiController@update');
    Route::post('/pegawai/{id}/updating','PegawaiController@updating');
    //delete data pegawai
    Route::get('/pegawai/{id}/delete','PegawaiController@deleting');

    //Route data golongan
    //menampilkan halaman data golongan
    Route::get('/golongan','GolonganController@index');
    //tambah data
    Route::get('/golongan/create','GolonganController@ShowFormCreate');
    Route::post('/golongan/creating','GolonganController@creating');
    //view detail data golongan
    Route::get('/golongan/{id}/view_detail','GolonganController@detail');
    //update data golongan
    Route::get('/golongan/{id}/update','GolonganController@update');
    Route::post('/golongan/{id}/updating','GolonganController@updating');
    //delete data golongan
    Route::get('/golongan/{id}/delete','GolonganController@deleting');


    //Route data cuti
    Route::get('/cuti','CutiController@index');


    //Route data pelatihan
    Route::get('/pelatihan','PelatihanController@index');

    //home bawaan laravel
    Route::get('/home', 'HomeController@index')->name('home');
});


