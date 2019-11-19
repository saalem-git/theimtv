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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::get('/register', function () {
    return view('register');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/confirm-email', function () {
    return view('confirm-email');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
