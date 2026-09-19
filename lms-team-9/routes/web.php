<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('dashboard');
Route::view('/tentang', 'tentang')->name('about');

// CRUD Resource Route untuk Mata Kuliah
Route::resource('courses', CourseController::class);
Route::resource('users', UserController::class);