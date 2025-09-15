<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'Home'])->name('Home');
Route::get('/Ella', [PageController::class, 'Ella'])->name('Ella');
Route::get('/Sandy', [PageController::class, 'Sandy'])->name('Sandy');
Route::get('/Rory', [PageController::class, 'Rory'])->name('Rory');