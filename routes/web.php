<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

// 🟢 Set hello page as default (home) page
Route::get('/', function () {
    return view('hello');
});

// 🟢 Login routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    return redirect('/hello')->with('success', 'Login successful!');
});

// 🟢 Hello route (optional since it's also default now)
Route::get('/hello', function () {
    return view('hello');
});

// 🟢 About and contact pages
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// 🟢 Products page
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
