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
    return view('feed/index');
});

Auth::routes();
Route::view('/Event','Events.Create')->name('Event');
Route::view('/Intern','Intern.Create')->name('Intern');
Route::view('/Stories','Stories.Create')->name('Story');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
