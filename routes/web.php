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

