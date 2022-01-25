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

Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/form', [App\Http\Controllers\RegisterController::class, 'index'])->name('form');

Route::get('/cursus', [App\Http\Controllers\CursusController::class, 'create'])->name('cursuscreate');

Route::post('/cursus/store', [App\Http\Controllers\CursusController::class, 'store'])->name('cursusstore');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
