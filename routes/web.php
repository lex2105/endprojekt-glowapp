<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 /**
  * Auth Routes
  */
//   '/login' => [AuthController::class, 'loginForm'],
//   '/login/do' => [AuthController::class, 'loginDo'],
//   '/logout' => [AuthController::class, 'logout'],
//   '/sign-up' => [AuthController::class, 'signupForm'],
//   '/sign-up/do' => [AuthController::class, 'signupDo'],