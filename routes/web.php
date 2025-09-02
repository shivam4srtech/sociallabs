<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/isi', [PageController::class, 'isi'])->name('isi');
Route::get('/bis-crs', [PageController::class, 'bisCrs'])->name('bis-crs');
Route::get('/scheme-x-certification', [PageController::class, 'schemeXcertification'])->name('schemeXcertification');
Route::get('/bee', [PageController::class, 'bee'])->name('bee');
Route::get('/wpc', [PageController::class, 'wpc'])->name('wpc');
Route::get('/fssai', [PageController::class, 'fssai'])->name('fssai');
Route::get('/medical', [PageController::class, 'csdcoMedical'])->name('medical');
Route::get('/cosmetics', [PageController::class, 'cosmetic'])->name('cosmetic');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');

Route::post('/serviceContactFrm', [HomeController::class, 'serviceContactFrm']);
Route::post('/sendContactfrm',[HomeController::class, 'sendContactfrm']);
Route::get('/type-allocation-code', [PageController::class, 'dot'])->name('dot');
Route::get('/peso-certification', [PageController::class, 'pesoCertification'])->name('peso-certification');
Route::get('/legal-metrology', [PageController::class, 'legalMetrology'])->name('legal-metrology');
Route::get('/tec', [PageController::class, 'telecommunicationEngineering'])->name('telecommunication-engineering');
Route::get('/stqc', [PageController::class, 'stqc'])->name('stqc');
Route::get('/arai-approval', [PageController::class, 'arai'])->name('arai');
Route::get('/ce-certification', [PageController::class, 'ceCertification'])->name('ce-certification');
Route::get('/bsmi-certification', [PageController::class, 'bsmiCertification'])->name('bsmi-certification');
Route::get('/fcc-certification', [PageController::class, 'fccCertification'])->name('fcc-certification');
Route::get('/kc-certification', [PageController::class, 'kcCertification'])->name('kc-certification');
Route::get('/cb-certification', [PageController::class, 'cbCertification'])->name('cb-certification');
Route::get('/imda-certification', [PageController::class, 'imdaCertification'])->name('imda-certification');


