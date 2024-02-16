<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Services Page
Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Menu Page
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Contacts Page
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');

// Booking Page
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
