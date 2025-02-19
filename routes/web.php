<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\MainController;

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Main page (admin dashboard)
Route::get('/', [MainController::class, 'index'])->name('home'); // Put this FIRST!
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');

// Grouped routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Resource routes for managing teachers, courses, and clubs
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/courses', CourseController::class);
    Route::resource('/clubs', ClubController::class);
});
