<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ArticleController;

// Master Routes
Route::get('/', [MasterController::class, 'home'])->name('home');
Route::get('/categories', [MasterController::class, 'categories'])->name('categories');

// Auth Routes
Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Articles Routes
Route::resource('articles', ArticleController::class)->middleware('auth');