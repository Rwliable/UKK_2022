<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\perjalananController;
use App\Http\Controllers\loginController;
use App\Models\User;
use App\Models\Perjalanan;

// Dashboard

Route::get('/', [perjalananController::class, 'index'])->middleware('auth');

// Input Data Perjalanan
Route::get('/input-data-perjalanan', function () {
    return view('pages.forms');
})->middleware('auth');

// Register
Route::get('/register', [userController::class, "halamanRegister"]);
Route::post('/simpanUser', [userController::class, "simpanRegister"]);

// Login
Route::get('/login', [loginController::class, 'loginPage'])->name('login');
Route::any('/post-login', [loginController::class, 'Login']);

// Logout
Route::get('/logout', [loginController::class, 'LogOut']);

// Form Perjalanan
Route::get('/perjalanan', [perjalananController::class, "perjalanan"])->middleware('auth');
Route::post('/simpanPerjalanan', [perjalananController::class, "simpanPerjalanan"])->middleware('auth');

// Search bar Dashboard
Route::get('/cari',[perjalananController::class, 'cariPerjalanan'])->middleware('auth');
Route::get('/sort', [perjalananController::class, 'urutkan']);