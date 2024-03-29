<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
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

Route::controller(PostController::class) ->group(
    function () {
        Route::get('/post','showPost');
        Route::get('/post/create','createPost');
        Route::get('/post/edit/{id}','editPost');
        Route::get('/post/delete/{id}','deletePost');
    }
);

/// TODO:ONLY METHOD => Come to mention them
/// TODO:EXCEPT METHOD => Bring me what I remember

Route::resource('user', UserController::class)->except(['create', 'edit' , 'show']);

Route::get('user',ProvisionServer::class);

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

Route::controller(StoreController::class)->group(function () {
    Route::get('store','index')->name('store.index');
    Route::get('store/create','create')->name('store.create');
    Route::post('store/insert','insert')->name('store.insert');
    Route::get('store/edit/{id}','edit')->name('store.edit');
    Route::PUT('store/update/{id}','update')->name('store.update');
    Route::get('store/delete/{id}','delete')->name('store.delete');
    Route::get('stores/delete/all','deleteAll')->name('stores.delete.all');
    Route::get('stores/delete/all/truncate','deleteTruncate')->name('stores.delete.all.truncate');
});

