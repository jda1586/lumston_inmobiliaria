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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['prefix' => 'properties'], function () {
    Route::get('/', 'PropertiesController@index')->name('properties.index');
    Route::get('/show', 'PropertiesController@show')->name('properties.show');
});

Route::group(['middleware' => ''], function () {

});