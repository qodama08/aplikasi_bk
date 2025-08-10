<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


// Route yang hanya bisa diakses oleh user yang belum login
Route::middleware(['guest'])->group(
    function () {
        Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.post');

        Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register.post');
    }
);


// Route yang hanya bisa diakses oleh user yang sudah login
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('/myprofile', function () {
        return view('myprofile');
    });
});
