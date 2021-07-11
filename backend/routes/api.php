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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::get('/test', function (Request $request) {
    return 'test';
});
*/

// v1 API
Route::group(['prefix' => 'v1'], function () {
    Route::get('/test', function () {
       return 'test';
    });
    Route::get('/test2', function () {
       return 'test2';
    });
});
