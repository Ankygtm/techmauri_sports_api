<?php

use App\Http\Controllers\Basketball_API;
use App\Http\Controllers\Cricksal_API;
use App\Http\Controllers\User_controller;
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
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/cricksal/{id?}',[Cricksal_API::class,'index']);
    Route::get('/basketball/{id?}',[Basketball_API::class,'index']);

    });


Route::post("login",[User_controller::class,'index']);