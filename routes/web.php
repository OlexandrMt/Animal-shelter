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

Route::resource('/animals', AnimalController::class);
require __DIR__.'/auth.php';
