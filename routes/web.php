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

Route::get('/', function () {
    return view('welcome');
});

Route::get('meet1', function () {
    return view('meet1');
});

Route::get('meet2', function () {
    return view('meet2');
});

Route::get('meet4', function () {
    return view('meet4');
});

Route::get('stylemeet1', function () {
    return view('stylemeet1');
});

Route::get('tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('webuts', function () {
    return view('webuts');
});

Route::get('navbarmeet3', function () {
    return view('wnavbarmeet3');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


