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

Route::get('/user', function () {
    return view('layouts/signup_login');
})->name('auth');

Route::get('/cart', function () {
    return view('layouts/cart');
})->name('cart');

// ************************************* VIEWS FROM 'other_layouts' FOLDER ************************************* //

Route::get('/order', function () {
    return view('layouts/other_layouts/view_order');
})->name('order');

Route::get('/return', function () {
    return view('layouts/other_layouts/return_policy');
})->name('return');

Route::prefix('/blogs')->group(function () {
    Route::get('/', function () {
        return view('layouts/other_layouts/blogs');
    })->name('blog');
    Route::get('/selection', function () {
        return view('layouts/other_layouts/blog_selection');
    })->name('blog.selection');
});


Route::prefix('/trouble_shooting')->group(function () {
    Route::get('/', function () {
        return view('layouts/other_layouts/trouble_shooting');
    })->name('trouble_shooting');
    Route::get('/blog', function () {
        return view('layouts/other_layouts/trouble_shooting_blog');
    })->name('trouble_shooting.blog');
});

Route::get('/careers', function () {
    return view('layouts/other_layouts/careers');
})->name('careers');