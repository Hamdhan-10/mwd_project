<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

//  Public homepage for everyone
Route::get('/', function () {
    return view('hello');
})->name('hello');

// 🟢 Login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// 🟢 Register
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// 🔴 Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirect to home after logout
})->name('logout');

// 🔗 About, Contact
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

//  Products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
