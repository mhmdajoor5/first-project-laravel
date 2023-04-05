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

Route::get('/post', function () {
    $post = "This is a post";
    return view('post', compact('post'));
});

Route::get("/post/create", function () {
    $createPost = "create post";
    return view('post_create', compact('createPost'));
});

Route::get('post/edit/{id}', function ($id) {
    $editPost = "edit post";
    return view('post_edit', compact('editPost'));
});

Route::get('post/delete/{id}', function ($id) {
    $deletePost = "delete post";
    return view('post_delete', compact('deletePost'));
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
