<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes for login and register users
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

Route::get("/login", [AuthController::class, "showLogin"]);
Route::post('/login', [AuthController::class, "doLogin"]);
Route::get("/logout", [AuthController::class, "doLogout"]);

Route::get("/register", [AuthController::class, "showLogin"]);
Route::post('/register', [AuthController::class, "doRegister"]);
