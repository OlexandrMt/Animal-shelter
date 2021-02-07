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

///Route::get('/', function () {
  //  return view('welcome');

//});


/*Route::get('shelters', 'ShelterControllerRes@index');
Route::get('shelters/createShelt', 'ShelterControllerRes@create');
Route::post('shelters/store', 'ShelterControllerRes@store');
Route::get('shelters/show', 'ShelterControllerRes@show');
Route::get('shelters/get', 'ShelterControllerRes@edit');
Route::get('shelters/update', 'ShelterControllerRes@update');
Route::get('shelters/destroy', 'ShelterControllerRes@desrtoy');*/

 Route::resource('shelters', ShelterController::class);
