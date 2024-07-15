<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/contact', [PublicController::class, "contact"])->name('contact');
Route::get('/about', [PublicController::class, "about"])->name('about');
Route::get('/recipes', [PublicController::class, "recipes"])->name('recipes');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'signup'])->name('signup');
