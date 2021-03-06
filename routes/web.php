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

Route::get('/', 'PostController@index')->name('home');

Route::resource('posts', 'PostController');
Route::get('posts/tags/{tag}', 'TagController@index');
Route::post('posts/{post}/comments', 'CommentController@store');

Auth::routes();
Route::get('/logout', function () {
    auth()->logout();

    return redirect()->home();
});
