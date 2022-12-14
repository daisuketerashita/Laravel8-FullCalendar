<?php

use App\Http\Controllers\ScheduleController;
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

Route::get('/',[ScheduleController::class,'index'])->name('index');

Route::get('/calendar/add/{id}',[ScheduleController::class,'add'])->name('add');
Route::post('/calendar/add/{id}',[ScheduleController::class,'store'])->name('store');
