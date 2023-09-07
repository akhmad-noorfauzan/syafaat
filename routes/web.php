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
    return view('home');
    

});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/artikel',function(){
    return view('artikel');
});

Route::get('/peraturan', function () {
    return view('peraturan');
});

Route::get('/tentang_kami', function () {
    return view('tentang_kami');
});