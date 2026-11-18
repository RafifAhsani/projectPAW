<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman utama sementara
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');

// Login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// Halaman khusus admin
Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return 'Selamat datang di Dashboard Admin!';
    })->name('admin.dashboard');
});

// Halaman khusus customer
Route::middleware(['role:customer'])->group(function () {
    Route::get('/customer/dashboard', function () {
        return 'Selamat datang di Dashboard Customer!';
    })->name('customer.dashboard');
});
