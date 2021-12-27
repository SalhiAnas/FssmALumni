<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\EventController;
use App\Http\Controllers\Post\InternController;
use App\Http\Controllers\Post\StoryController;


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
//
Route::view('/Event','Events.Create')->name('Event');
Route::view('/Intern','Intern.Create')->name('Intern');
Route::view('/Stories','Stories.Create')->name('Story');

Route::post('event/create',[EventController::class, 'store']);
Route::post('intern/create',[InternController::class,'store']);
Route::post('story/create',[StoryController::class,'store']);

Route::get('/event/list',[App\Http\Controllers\Post\EventController::class,'index']);
Route::get('/story/list',[App\Http\Controllers\Post\StoryController::class,'index']);

//Route::post('/events',[EventController::class, 'store']);
// fix route problem of laravel 8
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
