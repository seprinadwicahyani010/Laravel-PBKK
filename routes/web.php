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

// rute untuk halaman login
Route::get('/login', function () {
    return view('login');
});

// rute untuk halaman registrasi
Route::get('/registrasi', function () {
    return view('registrasi');
});

// rute untuk halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});