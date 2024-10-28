<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome'); // ini merujuk ke halaman welcome.blade.php di folder resource/views
});

Route::get('/', function () {
    return view('index'); // ini merujuk ke halaman index.blade.php
});

Route::get('/', function () {
    return view('login'); // ini merujuk ke halaman login.blade.php
});
Route::get('/about', function () {
    return view('about'); // ini merujuk ke halaman about.blade.php
});

