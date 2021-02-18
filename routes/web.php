<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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
});
<<<<<<< HEAD

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('shelters', ShelterController::class);
=======
require __DIR__.'/auth.php';


>>>>>>> origin/auth
