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

Route::resource('v1/user', 'v1\UserController');
Route::resource('v1/book', 'v1\BookController');
Route::resource('v1/car', 'v1\CarController');
Route::resource('v1/car-type', 'v1\CarTypeController');
Route::resource('v1/user-role', 'v1\UserRoleController');

