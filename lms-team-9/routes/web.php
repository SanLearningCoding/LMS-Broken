<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('dashboard');
Route::view('/tentang', 'tentang')->name('about');

// CRUD Resource Route untuk Mata Kuliah
Route::resource('courses', CourseController::class);