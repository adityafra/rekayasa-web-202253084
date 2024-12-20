<?php
/*202253084*/

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('beranda', [
        "nama" => "Aditya",
        "nim" => "202253084"
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        "nama" => "Aditya Maulana Afrizal",
        "nim" => "202253084"
    ]);
});

// Halaman single post
Route::get('/blog',[PostController::class, 'index']);
Route::get('/posts/{slug}',[PostController::class, 'show']);

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
