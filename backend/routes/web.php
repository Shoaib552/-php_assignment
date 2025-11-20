<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontPageController;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog Pages
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Dynamic CMS Pages (About, Contact, etc)
Route::get('/{slug}', [FrontPageController::class, 'show'])->name('page.show');
