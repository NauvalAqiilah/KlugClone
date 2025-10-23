<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/layanan-kami', [PageController::class, 'services'])->name('services');
Route::get('/artikel', [PageController::class, 'articles'])->name('articles');
Route::get('/hubungi-kami', [PageController::class, 'contact'])->name('contact');