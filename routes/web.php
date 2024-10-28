<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome'); // ini merujuk ke halaman welcome.blade.php di folder resource/views
});

// Route::get('/', function () {
//     return view('index'); // ini merujuk ke halaman index.blade.php di folder resourse/views
// });

// Route::get('/login', function () {
//     return view('login'); // ini merujuk ke halaman login.blade.php di folder resourse/views
// });

// Route::get('/about', function () {
//     return view('about'); // ini merujuk ke halaman about.blade.php di folder resourse/views
// });       


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');