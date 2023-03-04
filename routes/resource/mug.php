<?php

use App\Http\Controllers\MugController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::get('/mug', [MugController::class, 'index'])->name('show.mugs');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/mug/create', [MugController::class, 'create'])->name('mug.create.view');
    Route::post('/mug/create', [MugController::class, 'store'])->name('mug.create');
    Route::get('/mug/{mug}', [MugController::class, 'show'])->name('show.mug');
    Route::get('/mug/update/{mug}', [MugController::class, 'edit'])->name('mug.update.view');
    Route::put('/mug/update/{mug}', [MugController::class, 'update'])->name('mug.update');
    Route::delete('/mug/delete/{mug}', [MugController::class, 'destroy'])->name('mug.delete');
});