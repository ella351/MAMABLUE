<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'Home'])->name('Home');
Route::get('/Ella', [PageController::class, 'Ella'])->name('Ella');
Route::get('/Sandy', [PageController::class, 'Sandy'])->name('Sandy');
Route::get('/Rory', [PageController::class, 'Rory'])->name('Rory');

use App\Http\Controllers\CountryController;

Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
Route::post('/countries', [CountryController::class, 'store'])->name('countries.store');
Route::get('/countries/{country}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::put('/countries/{country}', [CountryController::class, 'update'])->name('countries.update');
Route::delete('/countries/{country}', [CountryController::class, 'destroy'])->name('countries.destroy');
