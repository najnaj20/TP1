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
    return view('Beranda', [
        "title"=> "Beranda"
    ]);
});

Route::get('/jadwal', function () {
    return view('Jadwal', [
        "title"=> "Jadwal"
    ]);
});

Route::get('/daftar', function () {
    return view('Daftar', [
        "title"=> "Daftar"
    ]);
});

Route::get('/contact', function () {
    return view('Contact', [
        "title"=> "Contact"
    ]);
});