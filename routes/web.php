<?php

// Route::get('posts', 'PostController@index')->name('posts.index');
Route::resource('posts', 'PostController');

Route::view('tenant-404', 'errors.404-tenant')->name('tenant.404');

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

/**
 * Auth Custom Routes
 */

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');

// Registration Routes
Route::group(['middleware' => 'subdomain_not_main'], function() {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register')->name('');    
});

Route::get('/home', 'HomeController@index')->name('home');
