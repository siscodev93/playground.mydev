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
    return view('home');
});


Route::get('/account/login', function () {
    return view('account.login');
})->name('account.login');

Route::get('/account/dashboard', function () {
    return view('account.dashboard');
})->name('account.dashboard');
