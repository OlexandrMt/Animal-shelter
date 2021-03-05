<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Models\Animal;
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
$animals = Animal::all();
Route::get('/', function () {

	 $loginBtnText = "LogIn";
	 $loginClass = "login";

	 if(Auth::user()){
		 $loginBtnText = "LogOut";
		 $loginClass = "logout";
	 }
	 $animals = Animal::all();
    return view('welcome', [
			"loginBtnText" => $loginBtnText,
			"loginClass" => $loginClass
		], ["animals"=>$animals]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('shelters/my', 'ShelterController@my')->name('shelters.my');
Route::resource('shelters', ShelterController::class);


Route::resource('/animals', AnimalController::class);
Route::resource('main', MainController::class);
