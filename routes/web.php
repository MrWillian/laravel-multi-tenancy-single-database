<?php

// Route::get('posts', 'PostController@index')->name('posts.index');
Route::resource('posts', 'PostController');

Route::view('tenant-404', 'errors.404-tenant')->name('tenant.404');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
