<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('dashboard');

Route::get('/mata-kuliah', [CourseController::class, 'index'])->name('courses.index');
Route::get('/mata-kuliah/{kode}', [CourseController::class, 'show'])->name('courses.show');

Route::view('/tentang', 'tentang')->name('about');