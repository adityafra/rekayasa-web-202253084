<?php
/*202253084*/

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('beranda', [
        "nama" => "Adityafra",
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
Route::get('/login',[LoginController::class, 'index']);
Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);

