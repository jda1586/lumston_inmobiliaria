<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'API'], function () {
    Route::group(['as' => 'auth.api.'], function () {
        Route::post('/login', 'AuthController@login')->name('login');
    });

    Route::group(['prefix' => 'properties', 'as' => 'properties.api.'], function () {
        Route::post('/search', 'PropertiesController@search')->name('search');
    });
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');