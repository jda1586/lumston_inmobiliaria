<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['namespace' => 'WEB'], function () {
    Route::group(['as' => 'auth.'], function () {
        Route::get('/login', 'AuthController@index')->name('index');
        Route::get('/register', 'AuthController@register')->name('register');
        Route::post('/login/request', 'AuthController@login')->name('login');
        Route::any('logout', 'AuthController@logout')->name('logout');
    });

    Route::group(['as' => 'welcome.'], function () {
        Route::get('/', 'WelcomeController@index')->name('index');
        Route::get('/sale', 'WelcomeController@sale')->name('sale');
        Route::get('/why', 'WelcomeController@why')->name('why');
        Route::get('/contact', 'WelcomeController@contact')->name('contact');
    });

    Route::group(['prefix' => 'properties', 'as' => 'properties.'], function () {
        Route::get('/', 'PropertiesController@index')->name('index');
        Route::get('/show/{id}', 'PropertiesController@show')->name('show');

        /* Authenticated */
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/create', 'PropertiesController@create')->name('create');
        });
    });

    Route::group(['middleware' => 'auth', 'as' => 'user.', 'prefix' => 'user'], function () {
        Route::get('/profile', 'UsersController@index')->name('index');
    });
});