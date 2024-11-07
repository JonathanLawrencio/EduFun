<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/category', [CategoryController::class, 'show'])->name('category');
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category');

Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article');

Route::get('/writer', [WriterController::class, 'index'])->name('writer');
Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writer.show');

// Route::get('/about', [AboutUsController::class, 'index'])->name('about');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/popular', [PopularController::class, 'index'])->name('popular');