<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('check_curl', [HomeController::class, 'getData']);
// Route::get('index', [HomeController::class, 'index']);
// Route::post('register', [UserAuthController::class,'register']);
// //Route::post('login', [UserAuthController::class,'login']);
// Route::get('weather', [HomeController::class, 'getWeather'])->middleware('auth:api');

    
// Route::middleware('auth:api')->group(function(){
//     Route::get('weather', [HomeController::class, 'getWeather']);
// });