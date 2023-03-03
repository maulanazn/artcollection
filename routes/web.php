<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('root');

Route::prefix('auth')->as('auth:')->middleware(['web'])->group(function() {
    base_path('routes/resource/auth.php');
});