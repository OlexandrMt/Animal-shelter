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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'AnimalController@all');

Route::get('shelters/my', 'ShelterController@my')->name('shelters.my');
Route::get('shelters/{shelter}/animals', 'ShelterController@animals')->name('shelters.animals');

Route::resource('shelters', ShelterController::class);
// Route::get('/team', function () {
//  return view('team');
// });

Route::get('/team', 'TeamController@index');
Route::resource('/animals', AnimalController::class);
Route::post("/contact/animal", "ContactController@contactAnimal");
Route::get("/contact/developers", "ContactController@show");
Route::post("/contact/developers", "ContactController@contactDevelopers");
require __DIR__.'/auth.php';
