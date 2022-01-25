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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
/*Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');*/
Route::get('/profile/{id}',[App\Http\Controllers\ProfileController::class, 'show'])->name('profile')->middleware('auth');
=======
Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

>>>>>>> 7b3ed63036821fb2ddd1fb50a88013e316772c4d
Route::get('/form', [App\Http\Controllers\RegisterController::class, 'index'])->name('form');

Route::get('/cursus', [App\Http\Controllers\CursusController::class, 'create'])->name('cursuscreate');

Route::post('/cursus/store', [App\Http\Controllers\CursusController::class, 'store'])->name('cursusstore');
