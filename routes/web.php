<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;
use App\Http\Controllers\ApplicationsController;
use App\Models\Applications;

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
Route::view('/admin', 'admin.index')->name('index');

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
    $jobs = Job::all();
        return view('careers', compact('jobs')); // careers.blade.php
})->name('careers');


Route::get('/about', function () {
    return view('about'); // about.blade.php
})->name('about');

Route::get('/contact', function () {
    return view('contact'); // contact.blade.php
})->name('contact');

Route::get('jobs', [JobController::class, 'index'])->middleware(['auth', 'verified'])->name('jobs.index');
Route::get('jobs/create', [JobController::class, 'create'])->middleware(['auth', 'verified'])->name('jobs.create');
Route::post('jobs/store', [JobController::class, 'store'])->middleware(['auth', 'verified'])->name('jobs.store');
Route::get('jobs/{job_id}', [JobController::class, 'show'])->middleware(['auth', 'verified'])->name('jobs.show');

Route::get('jobs/{job_id}/edit', [JobController::class, 'edit'])->middleware(['auth', 'verified'])->name('jobs.edit');
Route::put('jobs/{job_id}', [JobController::class, 'update'])->middleware(['auth', 'verified'])->name('jobs.update');
Route::delete('jobs/{job}', [JobController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('jobs.destroy');

Route::post('/applications', [ApplicationsController::class, 'store'])->name('applications.store');
Route::post('/jobs/uploadCv', [ApplicationsController::class, 'uploadCv'])->name('jobs.uploadCv');

Route::get('candidates', [ApplicationsController::class, 'index'])->middleware(['auth', 'verified'])->name('candidate.index');


Route::resource('candidate', ApplicationsController::class);
