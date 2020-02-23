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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix'=>'auth'
],static function(){
    Route::post('login','AuthApiController@login');
    Route::post('register','AuthApiController@register');
});

Route::groupe([
    'prefix'=>'places',
    'middleware'=>'auth:api'
], static function(){
    
});
