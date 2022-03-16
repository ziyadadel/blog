<?php

// public route 

Route::get('me','user\meController@getme');


// route group for authenticated
Route::group(['middleware' => 'api','prefix' => 'auth'], function($router) {
    Route::post('logout', 'Auth\LoginController@logout');

    Route::put('setting/profile', 'User\SettingsController@updateProfile');
    Route::put('setting/password', 'User\SettingsController@updatePassword');
});

// route group for guestes
Route::group(['middleware' => 'api','prefix' => 'auth'], function($router) {
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('verification/verify/{user}', 'Auth\verificationController@verify')->name('verification.verify');
    Route::post('verification/resend', 'Auth\verificationController@resend');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});















// Route::group([

//     'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

//     Route::post('login', 'AuthController@login');
//     Route::post('register', 'AuthController@register');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });