<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

// Trang đăng nhập
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Trang đăng ký
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('show.register');
Route::post('/register', [RegisterController::class, 'register']);

// Trang tài khoản người dùng
Route::post('/user-profile/update', [UserProfileController::class, 'update'])->middleware('auth')->name('user.profile.update');
Route::get('/user-profile', [UserProfileController::class, 'show'])->middleware('auth')->name('user.profile');

// Trang chủ, Service, Booking
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');