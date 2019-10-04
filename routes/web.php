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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha') ->name('refresh_captcha');

Route::get('/kategori_artikel','KategoriArtikelController@index') ->name('kategori_artikel.index');
<<<<<<< HEAD
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');
=======
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');

Route::get('/artikel','ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create','ArtikelController@create')->name('artikel.create');
Route::post('/artikel','ArtikelController@index')->name('artikel.store');
Route::get('/artikel/{id}','ArtikelController@show')->name('artikel.show');
>>>>>>> masih belum selesai tapi mau ngerjakan di lain laptop lain yang gk dipake
