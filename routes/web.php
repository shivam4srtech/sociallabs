<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/isi', [PageController::class, 'isi'])->name('isi');
Route::get('/bis-crs', [PageController::class, 'bisCrs'])->name('bis-crs');
Route::get('/scheme-x-certification', [PageController::class, 'schemeXcertification'])->name('schemeXcertification');
Route::get('/bee', [PageController::class, 'bee'])->name('bee');
