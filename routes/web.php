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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/js2', function () {
    return view('js2');
});
Route::get('/latihan1', function () {
    return view('latihan1');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/style', function () {
    return view('style');
});
Route::get('/validasi1', function () {
    return view('validasi1');
});
