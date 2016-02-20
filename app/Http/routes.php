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
    return redirect('auth/login');
});

// Dashboard :P
Route::get('dashboard', 'DashboardController@index');


// List santri yang di seleksi...
Route::get('seleksi', 'SeleksiController@index');
Route::get('profile_seleksi/{id}', 'SeleksiController@profile');
Route::get('add_seleksi', 'SeleksiController@add_seleksi');
Route::post('add_seleksi/add', 'SeleksiController@create');
Route::get('delete_user_seleksi/{id}', 'SeleksiController@destroy');

//soal buat calon santri baru
Route::get('soal_seleksi', 'SoalSeleksiController@index');


//visi-misi
Route::get('visi_misi',"VisiMisiController@index");

//Struktur Organisasi
Route::get('struktur',"StrukturOrgaisasiController@index");

//Aturan Pondok
// Route::get('struktur',"AturanPondokController@index");

// Login Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
