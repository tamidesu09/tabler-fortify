<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Route
Route::view('/', 'home')->name('home');

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/home', 'home')->name('home');
    Route::view('/profile/edit', 'profile.edit')->name('profile.edit');
    Route::view('/profile/password', 'profile.password')->name('profile.password');
    Route::view('/profile/two-factor', 'profile.two-factor')->name('profile.two-factor');
    Route::view('/profile/recovery-code', 'auth.recovery-code')->name('profile.recovery-code');

    Route::view('/libraries/datatables', 'libraries.datatables')->name('libraries.datatables');
    Route::view('/libraries/listjs', 'libraries.listjs')->name('libraries.listjs');
});

// Public Routes
Route::get('/services', function () {
    return view('services'); // services.blade.php
})->name('services');

Route::get('/careers', function () {
    return view('careers'); // careers.blade.php
})->name('careers');

Route::get('/about', function () {
    return view('about'); // about.blade.php
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // contact.blade.php
})->name('contact');
