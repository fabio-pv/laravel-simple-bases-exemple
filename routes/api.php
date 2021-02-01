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

Route::post('v1/login', 'v1\AuthController@login');

Route::group(['middleware' => ['check.auth']], function () {

    Route::apiResource('v1/user', 'v1\UserController');
    Route::apiResource('v1/book', 'v1\BookController');
    Route::apiResource('v1/car-type', 'v1\CarTypeController');
    Route::apiResource('v1/user-role', 'v1\UserRoleController');
    Route::apiResource('v1/car', 'v1\CarController');

});
