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

Auth::routes();

Route::middleware('auth')
    ->prefix('admin')
    ->group(function () {

    Route::get('/', function () {
        return redirect()->route('post.index');
    });

    Route::resource('post', 'PostController', [
        'except' => ['show']
    ]);
});

Route::get('/', 'PostController@home')->name('home');
Route::get('/{post}', 'PostController@show')->name('post.show');
