<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/reservation', 'reservation')->name('reservation');
Route::view('/contact', 'contact')->name('contact');