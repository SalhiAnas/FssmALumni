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



Auth::routes();



Route::post('/profile/{type_cursus}/add_cursus', 'App\Http\Controllers\ProfileController@add_cursus')->name('add_cursus');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profileAuth');

Route::post('/profile/update_user', [App\Http\Controllers\ProfileController::class, 'update_user'])->name('update_user');


