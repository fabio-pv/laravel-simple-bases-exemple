<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 22222
*/

Route::get('/deploy', function () {

    $data = [

        'branch' => 'master',
        'repository_name' => 'repository_name',
        'html_url' => 'html_url',
        'pusher_name' => 'pusher_name',
        'time_total' => 20,
        'posts' => [
            'composer' => [],
            'Git' => []
        ],

    ];

    return view('laravel-simple-deploy::deploy', [
        'data' => $data
    ]);
});
