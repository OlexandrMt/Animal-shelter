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

Route::get('/', 'AnimalController@all');

Route::get('shelters/my', 'ShelterController@my')->name('shelters.my');
Route::get('shelters/{shelter}/animals', 'ShelterController@animals')->name('shelters.animals');

Route::get('notifications', 'NotificationController@index')->name('notifications.index');
Route::get('notifications/create', 'NotificationController@create')->name('notifications.create');
Route::post('notifications', 'NotificationController@storeNotification')->name('notifications.store');
Route::post('/mark-as-read', 'NotificationController@markNotification')->name('notifications.mark');
Route::post('/delete-notification', 'NotificationController@deleteNotification')->name('notifications.delete');


Route::resource('shelters', ShelterController::class);
// Route::get('/team', function () {
//  return view('team');
// });
// Route::get('/main', function () {
//     return view('main1');
// });
Route::get('/main', 'AnimalController@main')->name('animals.main');


Route::get('/team', 'TeamController@index');
Route::resource('/animals', AnimalController::class);
require __DIR__.'/auth.php';
