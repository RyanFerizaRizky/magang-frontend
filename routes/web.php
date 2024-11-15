<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('post_register');
Route::post('/login', [AuthController::class, 'login'])->name('post_login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function(){
        return view('home');
    })->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
