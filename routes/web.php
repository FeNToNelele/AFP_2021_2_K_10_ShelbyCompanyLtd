<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myProfile', [App\Http\Controllers\UserController::class, 'myProfile'])->name('myProfile')->middleware('auth');
Route::post('/apply', [App\Http\Controllers\EventsController::class, 'apply'])->name('apply')->middleware('auth');

Route::get('/appliedEvents', [App\Http\Controllers\EventsController::class, 'appliedEvents'])->name('appliedEvents')->middleware('auth');
Route::get('/manageEvents', [EventsController::class, 'manageEvents'])->name('manageEvents')->middleware('auth');
Route::post('/editEventForm', [EventsController::class, 'editEventForm'])->name('editEventForm')->middleware('auth');
Route::post('/editEvent', [EventsController::class, 'editEvent'])->name('editEvent')->middleware('auth');
Route::delete('/deleteEvent', [App\Http\Controllers\EventsController::class, 'deleteEvent'])->middleware('auth')->name('deleteEvent');

Route::delete('/abandon', [App\Http\Controllers\EventsController::class, 'abandonEvent'])->middleware('auth');

Route::get('/events', [EventsController::class, 'listAllEvents'])->name('events');
Route::get('/events/{id}', [EventsController::class, 'listAnEvent'])->middleware('auth');
Route::get('/createEvent', [EventsController::class, 'createEvent'])->name('createEvent')->middleware('auth');
Route::post('/registerEvent', [EventsController::class, 'registerEvent'])->name('registerEvent')->middleware('auth');

Route::get('/verify/{id}', [App\Http\Controllers\EventsController::class, 'verify'])->middleware('auth')->name('verify');
Route::put('/verify', [App\Http\Controllers\EventsController::class, 'verified'])->middleware('auth')->name('verify');