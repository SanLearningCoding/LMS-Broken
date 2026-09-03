<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Selamat Datang');
});

Route::get('/tentang', function () {
    return view('tentang');
});
    