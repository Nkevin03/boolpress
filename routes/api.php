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

Route::get('/test', function() {
    return response()->json([
        'clients' => ['Kevin', 'Giorgio', 'Maria'],
        'lorem' => 'ipsum',
    ]);
});

// ENDPOINT 

Route::namespace('Api')->group(function(){
    // Post Archive
    Route::get('/posts', 'PostController@index');
});