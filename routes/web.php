<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanjirController;

// Named Routes LaporBanjir
Route::get('/', [BanjirController::class, 'index'])->name('banjir.index');
Route::get('/lapor', [BanjirController::class, 'create'])->name('banjir.form');
Route::post('/lapor', [BanjirController::class, 'store'])->name('banjir.store');
