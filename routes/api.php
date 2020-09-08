<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RandomController;

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

// вывод id и сгенерированного числа
Route::get('random/generate', 'RandomController@generate')->middleware('onwantsjson');

// вывод сгенерированного числа и даты-времени генерации
Route::get('random/retrieve/{id}', 'RandomController@retrieve')->middleware('onwantsjson');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
