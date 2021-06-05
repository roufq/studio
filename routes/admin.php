<?php

Route::group(['namespace' => 'Admin'], function() {
    // Dashboard
    Route::get('/', 'HomeController@index')->name('admin.home');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Reset Password
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.update');

    // Confirm Password
    Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');
    Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('admin.verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('admin.verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('admin.verification.resend');
    route::resource('branch', 'BranchController');
        Route::post('/branch/update/{id}','BranchController@update')->name('branch.update');
        route::get('/branch/destroy/{id}','BranchController@destroy')->name('branch.destroy');
        //studio
        route::resource('studio', 'StudioController');
        Route::post('/studio/update/{id}','StudioController@update')->name('studio.update');
        route::get('/studio/destroy/{id}','StudioController@destroy')->name('studio.destroy');
        route::get('/studio/data/{id?}', 'StudioController@studio')->name('studio.data');
        //movie
        route::resource('movie', 'MovieController');
        Route::post('/movie/update/{id}','MovieController@update')->name('movie.update');
        route::get('/movie/destroy/{id}','MovieController@destroy')->name('movie.destroy');
        route::get('/movie/data/{id?}', 'MovieController@movie')->name('movie.data');
        //Schedule
        Route::resource('schedule', 'ScheduleController');
        Route::post('/Schedule/update/{id}', "ScheduleController@update")->name('schedule.update');
        Route::get('/schedule/destroy/{id}', 'ScheduleController@destroy')->name('schedule.destroy');
        //admin
        Route::resource('admin','AdminController');
        Route::post('/admin/update/{id}', "AdminController@update")->name('admin.update');
        Route::get('/admin/destroy/{id}', 'AdminController@destroy')->name('admin.destroy');
        //users
        Route::resource('users','UsersController');
        Route::post('/users/update/{id}', "UsersController@update")->name('users.update');
        Route::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
    });
