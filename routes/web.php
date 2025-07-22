<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/about', function () {
    return view('about'); // This loads resources/views/about.blade.php
});

Route::view('/contact', 'contact')->name('contact'); // shows the contact page
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store'); // handles form submission

Route::view('/', 'hello')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/products', function () {
    return view('products');
});



Route::get('/products', [ProductController::class, 'index'])->name('products.index');
