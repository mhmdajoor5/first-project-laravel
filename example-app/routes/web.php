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

Route::get('users', function () {
    return view('users');
});

Route::get('post', function () {
    return view('post');
});

Route::get('product', function () {
    return view('product');
});

Route::get('users/{name}', function (String $name) {
    if ($name == 'admin') {
        return 'Hello Admin';
    }else{
        return 'Hello User';
    }
        return $name;
    });
