<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'Login']);
Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('register');
Route::post('register',[RegisterController::class,'register']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


// Routes protégées
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


