<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('root');

Route::prefix('auth')->as('auth:')->middleware(['web'])->group(function() {
    base_path('routes/resource/auth.php');
});

Route::prefix('mug')->as('mug:')->middleware(['auth', 'auth.session'])->group(function() {
    base_path('routes/resource/mug.php');
});