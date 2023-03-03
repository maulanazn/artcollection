<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::get('/register', [UserController::class, 'register_view'])->name('register.view');
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::get('/login', [UserController::class, 'login_view'])->name('login.view');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth.session'], function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});