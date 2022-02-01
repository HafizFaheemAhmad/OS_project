<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Routing\RouteUri;



Route::view('/', 'dashboard.home')->middleware('auth');
Route::view('login', 'dashboard.login', ['result' => (Auth::user() == null)]);
Route::view('chart', 'dashboard.chart', ['result' => (Auth::user() != null)])->middleware('auth');
Route::post('login', [UserAuthController::class, 'login']);
Route::post('logout', [UserAuthController::class, 'logout']);



// Route::get('/', function () {
//     return view('dashboard/home');
// });
// //login
// Route::get('login', function () {
//     return view('dashboard/login');
// });
//chart page

// Route::get('check_curl', [HomeController::class, 'getData']);
// Route::get('weather', [HomeController::class, 'getWeather']);
// // Route::get('index', [HomeController::class, 'index']);
//  Route::get('login', function() {
//      return response()->json(['message' => 'Unauthenticated.'], 401);
//  });
 //Route::post('login', [ 'as' => 'login']);
