<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Operator\OperatorController;
use PHPUnit\Framework\Constraint\Operator;

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/', function(){
    return view('home');
})->name('home');

Route::post('/register', [AuthController::class, 'register'])->name('post_register');
Route::post('/login', [AuthController::class, 'login'])->name('post_login');

Route::middleware(['auth'])->group(function () {
   
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('operator')->name('operator.')->middleware(['auth', 'check.akses:operator'])->group(function(){
        Route::get('/', [OperatorController::class, 'index'])->name('home');
        Route::get('/admin', [OperatorController::class, 'index_admin'])->name('index.admin');
        Route::get('/admin/create', [OperatorController::class, 'create_admin'])->name('create_admin');
        Route::post('/admin', [OperatorController::class, 'store_admin'])->name('store_admin');
    });

    Route::prefix('admin')->name('admin.')->middleware(['auth', 'check.akses:admin'])->group(function(){
        Route::get('/', [AdminController::class, 'index'])->name('home');
    });

    Route::prefix('user')->name('user.')->middleware(['auth', 'check.akses:user'])->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('home');
    });
});


