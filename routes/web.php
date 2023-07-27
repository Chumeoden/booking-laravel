<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('dashboard');
});

// Trang đăng nhập
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login']);

// Xử lý đăng xuất
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Trang đăng ký
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('show.register');
Route::post('/register', [RegisterController::class, 'register']);
