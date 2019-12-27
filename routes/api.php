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

Route::group(['prefix' => 'book'], static function () {
    Route::post('create', 'BookController@create');
    Route::get('list', 'BookController@list');
    Route::delete('delete', 'BookController@delete');
    Route::put('update', 'BookController@update');
});
