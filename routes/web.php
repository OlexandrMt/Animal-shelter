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
return view ('welcome');
});
<<<<<<< HEAD
//Route::get('p', 'MyController@index');*/

//Route::get('/', 'MyControler@index' {
//Route::resource('p', MyController::class);
//Route::get('my', 'App\Http\Controllers\Mycontroller@index');
Route::resource('my', MyController::class);
Route::resource('photos', PhotoController::class);
Route::resource('main', MainController::class);
=======
Route::resource('photos', NewResourceController::class);
Route::get('/animalIndex', function(){
  return view("animals/Index");
});
>>>>>>> dev
