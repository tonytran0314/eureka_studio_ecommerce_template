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
    return view('layouts/home');
})->name('home');

Route::prefix('/exploring')->group(function () {
    Route::get('/', function () {
        return view('layouts/exploring');
    })->name('exploring');
    Route::get('/men', function () {
        return view('layouts/men');
    })->name('men');
    Route::get('/women', function () {
        return view('layouts/women');
    })->name('women');
});


Route::get('/selection', function () {
    return view('layouts/selection');
})->name('selection');

Route::get('/login', function () {
    return view('layouts/login');
})->name('login');

Route::get('/cart', function () {
    return view('layouts/cart');
})->name('cart');