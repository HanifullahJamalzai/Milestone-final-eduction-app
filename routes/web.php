<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\landing\LandingController;
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


Route::get('/', [LandingController::class, 'index'])->name('landing.index');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');
Route::get('/course', [LandingController::class, 'course'])->name('landing.course');
Route::get('/event', [LandingController::class, 'event'])->name('landing.event');
Route::get('/trainer', [LandingController::class, 'trainer'])->name('landing.trainer');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

