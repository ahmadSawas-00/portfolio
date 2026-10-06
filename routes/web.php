<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


Route::get('/', function () {
    return view('welcome');
});


// رابط الصفحة الرئيسية للملف الشخصي
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

// رابط تبديل اللغة (عربي / إنكليزي)
Route::get('/lang/{lang}', [PortfolioController::class, 'switchLang'])->name('lang.switch');