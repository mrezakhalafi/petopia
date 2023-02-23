<?php

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

Route::get('/', 'UserController@home');

Route::get('/logout', 'UserController@logout');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'UserController@login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', 'UserController@store');

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/seller', function () {
    return view('seller');
});

Route::get('/kebijakan', function () {
    return view('kebijakan');
});

Route::get('/forget', function () {
    return view('forget');
});

Route::get('/store', 'ProductController@store');

Route::get('/store/{category}', 'ProductController@category');

Route::get('/detail/{product}','ProductController@detail');

Route::post('/search', 'ProductController@search');

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/404', function () {
    return view('404');
});
