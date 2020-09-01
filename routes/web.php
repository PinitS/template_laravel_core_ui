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
    return view('master');
});

Route::get('/login', function () {
    return view('page.login');
});

Route::get('/dash', function () {
    return view('page.dashboard');
});

Route::get('/test', function () {
    return view('page.test');
});

Route::get('/cashier', function () {
    return view('page.cashier');
});

Route::get('/order', function () {
    return view('page.order');
});
