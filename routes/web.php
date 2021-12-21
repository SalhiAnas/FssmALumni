<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\EventController;
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
Route::post('intern/create','Post/InternController@store');
Route::post('story/create','Post/StoryController@store');
Route::post('event/create','Post/EventController@store');
Route::post('/events',[EventController::class, 'all']);
// fix route problem of laravel 8
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
