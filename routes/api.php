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


Route::post('/person/save','PersonController@apiPersonSave');
Route::post('/person/update','PersonController@apiPersonUpdate');
Route::post('/person/remove','PersonController@apiPersonRemove');
Route::get('/persons/get','PersonController@apiPersonsGet');
Route::get('/person/{id}/get/','PersonController@apiPersonGet');