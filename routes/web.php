<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
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
<<<<<<< HEAD
Route::get('/', function () {


	 $loginBtnText = "LogIn";
	 $loginClass = "login";

	 if(Auth::user()){
		 $loginBtnText = "LogOut";
		 $loginClass = "logout";
	 }
    return view('welcome', [
			"loginBtnText" => $loginBtnText,
			"loginClass" => $loginClass
		]);

=======

Route::get('/', function () {
    return view('welcome');
>>>>>>> dev
});

Route::get('shelters/my', 'ShelterController@my')->name('shelters.my');
Route::resource('shelters', ShelterController::class);

Route::resource('/animals', AnimalController::class);
Route::resource('main', MainController::class);
require __DIR__.'/auth.php';
