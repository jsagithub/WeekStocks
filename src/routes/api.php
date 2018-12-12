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
//Predictions
Route::get('predictions', 'PredictionsController@index');
Route::get('predictions/{id}', 'PredictionsController@show');
//Data Set Predictions
Route::get('dataset', 'DataSetPredictionsController@index');
Route::get('dataset/{id}', 'DataSetPredictionsController@show');
