<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/index/promo', function () {
    return view('promo');
});
Route::get('/index/best', function () {
    return view('best');
});
Route::get('/index/satuan', function () {
    return view('satuan');
});
Route::get('/index/paketan', function () {
    return view('paketan');
});
Route::get('/index/drink', function () {
    return view('drink');
});
Route::get('/index/frozen', function () {
    return view('frozen');
});




