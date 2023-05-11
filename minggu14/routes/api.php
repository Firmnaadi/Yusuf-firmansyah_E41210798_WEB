<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPendidikanController;

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

Route::middleware('auth:api')->get('/user',function(Request $request){
    return $request->user();
});

Route::group(['namespace' => 'backed'],function(){
    Route::get('api_pendidikan',[ApiPendidikanController::class,'getAll']);
    Route::get('api_pendidikan/{id}',[ApiPendidikanController::class,'getpen']);
    Route::post('api_pendidikan',[ApiPendidikanController::class,'createpen']);
    Route::put('api_pendidikan/{id}',[ApiPendidikanController::class,'updatepen']);
    Route::delete('api_pendidikan/{id}',[ApiPendidikanController::class,'deletepen']);
});