<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;

//home 
Route::get('/', function () {
    return view('dashboard/home');
});

//login
Route::get('login', function () {
    return view('dashboard/login');
});
Route::post('login', [UserAuthController::class, 'login'])->name('login');
//chart page
Route::get('chart', function () {
    return view('dashboard/chart');
});
// Route::get('check_curl', [HomeController::class, 'getData']);
// Route::get('weather', [HomeController::class, 'getWeather']);
// Route::get('index', [HomeController::class, 'index']);
// Route::get('login', function() {
//     return response()->json(['message' => 'Unauthenticated.'], 401);
// });
 //Route::post('login', [ 'as' => 'login']);
