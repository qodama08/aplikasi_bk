<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact-us', function () {
    return view('contact');
});


// Route yang hanya bisa diakses oleh user yang belum login
Route::middleware(['guest'])->group(
    function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.post');

        Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [AuthController::class, 'register'])->name('register.post');


        Route::get('/verify-email', [AuthController::class, 'showVerifyForm'])->name('verify.form');

        Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('send.otp');

        Route::post('/verify-email', [AuthController::class, 'verify'])->name('verify.otp');
    }
);


// Route yang hanya bisa diakses oleh user yang sudah login
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/myprofile', function () {
        return view('myprofile');
    });

    // Admin routes
    Route::middleware(['cekRole:admin'])->group(function () {

        Route::get('/verifikasi', function () {
            return view('admin.verifikasi');
        })->name('admin.verifikasi');
        Route::get('/seleksi', function () {
            return view('admin.seleksi');
        })->name('admin.seleksi');
        Route::get('/pengumuman', function () {
            return view('admin.pengumuman');
        })->name('admin.pengumuman');
        Route::get('/laporan', function () {
            return view('admin.laporan');
        })->name('admin.laporan');
    });

    // User routes
    Route::middleware(['cekRole:user'])->group(function () {

        Route::get('/biodata', function () {
            return view('user.biodata');
        })->name('user.biodata');
        Route::get('/dokumen', function () {
            return view('user.dokumen');
        })->name('user.dokumen');
        Route::get('/status', function () {
            return view('user.status');
        })->name('user.status');
        Route::get('/daftar-ulang', function () {
            return view('user.daftar_ulang');
        })->name('user.daftar_ulang');
    });
});
