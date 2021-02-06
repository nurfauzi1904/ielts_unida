<?php

use Illuminate\Support\Facades\Route;

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
/*route u/navbar*/
Route::get('/beranda', 'NavController@beranda');/*get u/ tipe request, (/) tujuan alamat routing hlmn, navcontroller= akan di arahkan ke controller nav, u/ menjalankan function nama file beranda yg berada di folder view beranda.blade.php*/
Route::get('/home', 'NavController@home');
Route::get('/aboutus', 'NavController@aboutus');

/*route u/ halaman paket*/
Route::get('/', 'PaketController@index');
Route::get('/create', 'PaketController@create')->name('paket.create');
Route::post('/', 'PaketController@proses')->name('paket.proses');/*u/ memerintahkan menjalankan method proses dalam controller SoalController dg menggunakan fungsi post */
Route::get('/index/delete/{id}', 'PaketController@destroy')->name('paket.destroy');
Route::get('/index/edit/{id}', 'PaketController@edit')->name('paket.edit');
Route::post('/index/update/{id}', 'PaketController@update')->name('paket.update');

/*route u/  detail */
Route::get('/detail/detailindex/{id}', 'DetailController@index')->name('detail_index');

/*route u/ halaman form*/
Route::get('/soalcer/{id}', 'FormController@soalcer')->name('soalcer');
Route::get('/soalpil/{id}', 'FormController@soalpil')->name('soalpil');
Route::get('/soalpilban/{id}', 'FormController@soalpilban')->name('soalpilban');
Route::get('/soalessay/{id}', 'FormController@soalessay')->name('soalessay');
Route::post('/detailindex', 'FormController@post')->name('cerita.post');
Route::post('/detailindex1', 'FormController@post1')->name('soalpil.post1');
Route::post('/detailindex2', 'FormController@post2')->name('soalpilban.post2');
Route::post('/detailindex3', 'FormController@post3')->name('soalessay.post3');

// u/ form edit cerita
Route::get('/soalcer/delete/{id}', 'CeritaController@destroy')->name('soalcer.destroy');
Route::get('/soalcer/edit/{id}', 'CeritaController@edit')->name('soalcer.edit');
Route::post('/soalcer/update/{id}', 'CeritaController@update')->name('soalcer.update');

// u/ form edit soalpil
Route::get('/soalpil/delete/{id}', 'PilganController@destroy')->name('soalpil.destroy');
Route::get('/soalpil/edit/{id}', 'PilganController@edit')->name('soalpil.edit');
Route::post('/soalpil/update/{id}', 'PilganController@update')->name('soalpil.update');

// u/ form edit soalpilban
Route::get('/soalpilban/delete/{id}', 'PilbanController@destroy')->name('soalpilban.destroy');
Route::get('/soalpilban/edit/{id}', 'PilbanController@edit')->name('soalpilban.edit');
Route::post('/soalpilban/update/{id}', 'PilbanController@update')->name('soalpilban.update');

// u/ form edit soalessay
Route::get('/soalessay/delete/{id}', 'EssayController@destroy')->name('soalessay.destroy');
Route::get('/soalessay/edit/{id}', 'EssayController@edit')->name('soalessay.edit');
Route::post('/soalessay/update/{id}', 'EssayController@update')->name('soalessay.update');




/*Route::get('/beranda', function () {
    return view('beranda');/*get u/ tipe request, / tujuan alamat routing hlmn, return view akan nampilin hlmn di folder view dgn nama filenya
});*/

/*Route::get('/home', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('layanan.aboutus');
});*/


