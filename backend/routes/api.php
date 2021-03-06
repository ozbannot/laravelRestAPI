<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// v1 API
Route::group(['prefix' => 'v1'], function () {
    Route::get('pattern','App\Http\Controllers\V1\PatternController@index');
});
// v2 API
Route::group(['prefix' => 'v2'], function () {
    Route::get('pattern/{pattern?}','App\Http\Controllers\V2\PatternController@index');
});
