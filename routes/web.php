<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('client', ClientController::class);
Route::resource('profile', ProfileController::class);
Route::get('/resume', [PageController::class, 'resume'])->name('resume');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::resource('blog', BlogController::class);

