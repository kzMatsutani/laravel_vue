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

Route::get('/admin/product', 'ProductsController@index');
Route::get('/admin/product/{product}', 'ProductsController@show');
Route::post('/admin/product', 'ProductsController@store');
Route::put('/admin/product/{product}', 'ProductsController@update');
Route::delete('/admin/product/{product}', 'ProductsController@destroy');
