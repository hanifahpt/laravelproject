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

Route::get('/hanifah', function () {
    return view('hanifah');
});

Route::get('/siswa', function () {
    $nama ='Hanifah Aneke Putri';
    $nilai = '100';
    return view('siswa', compact('nama', 
'nilai'));
});

Route::get('/siswa', function () {
    $nama ='hanifah';
    $nilai = [80, 30, 45, 70, 90];
    return view('siswa', compact('nama', 
'nilai'));
});
