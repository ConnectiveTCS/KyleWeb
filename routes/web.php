<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
})->name('home');
Route::get('/contact', function () {
    return view('public.contact.index');
})->name('contact');
Route::get('/about', function () {
    return view('public.about.index');
})->name('about');
Route::get('/services', function () {
    return view('public.services.index');
})->name('services');

// Make sure dashboard route uses ContactController
Route::get('/dashboard', [ContactController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Contact routes
Route::resource('contacts', ContactController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

require __DIR__.'/auth.php';
