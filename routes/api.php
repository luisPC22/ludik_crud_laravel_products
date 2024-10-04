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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'App\Http\Controllers\ProductsController@all');
Route::post('/products/store', 'App\Http\Controllers\ProductsController@store');
Route::get('/products/show/{id}', 'App\Http\Controllers\ProductsController@show');
Route::post('/products/update/{id}', 'App\Http\Controllers\ProductsController@update');
Route::post('/products/destroy/{id}', 'App\Http\Controllers\ProductsController@destroy');
