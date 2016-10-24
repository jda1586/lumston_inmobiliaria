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

Route::group(['as' => 'welcome.'], function () {
    Route::get('/', 'WelcomeController@index')->name('index');
    Route::get('/sale', 'WelcomeController@sale')->name('sale');
});

Route::group(['prefix' => 'properties', 'as' => 'properties.'], function () {
    Route::get('/', 'PropertiesController@index')->name('index');
    Route::get('/show/{id}', 'PropertiesController@show')->name('show');
    Route::group(['prefix' => 'ajax'], function () {
        Route::post('/search', 'PropertiesController@searchAjax')->name('searchAjax');
    });
});

Route::group([], function () {
    Route::group(['prefix' => 'properties', 'as' => 'properties'], function () {
        Route::get('/add', 'PropertiesController@create')->name('create');
    });
});