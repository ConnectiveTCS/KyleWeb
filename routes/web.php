<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\Public\MainController::class, 'index'])->name('home');
Route::get('/contact', function () {
    return view('public.contact.index');
})->name('contact');
Route::get('/about', function () {
    return view('public.about.index');
})->name('about');
Route::get('/services', function () {
    return view('public.services.index');
})->name('services');

// Change the URL pattern to avoid conflict with admin project routes
Route::get('/public/projects/{project}', [\App\Http\Controllers\Public\MainController::class, 'show'])
    ->name('public.projects.show');

Route::get('/dashboard', [MainController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

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

    // Project routes
    Route::resource('projects', \App\Http\Controllers\ProjectController::class)->except(['edit', 'update', 'destroy']);
    Route::get('/projects/create', [\App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [\App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');
    Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/{id}/edit', [\App\Http\Controllers\ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{id}', [\App\Http\Controllers\ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}', [\App\Http\Controllers\ProjectController::class, 'destroy'])->name('projects.destroy');

    // Rating routes
    Route::resource('ratings', \App\Http\Controllers\RatingController::class)->except(['edit', 'update', 'destroy']);
    Route::get('/ratings/create', [\App\Http\Controllers\RatingController::class, 'create'])->name('ratings.create');
    Route::post('/ratings', [\App\Http\Controllers\RatingController::class, 'store'])->name('ratings.store');
    Route::get('/ratings/{id}', [\App\Http\Controllers\RatingController::class, 'show'])->name('ratings.show');
    Route::get('/ratings', [\App\Http\Controllers\RatingController::class, 'index'])->name('ratings.index');
    Route::get('/ratings/{id}/edit', [\App\Http\Controllers\RatingController::class, 'edit'])->name('ratings.edit');
    Route::put('/ratings/{id}', [\App\Http\Controllers\RatingController::class, 'update'])->name('ratings.update');
    Route::delete('/ratings/{id}', [\App\Http\Controllers\RatingController::class, 'destroy'])->name('ratings.destroy');
});

require __DIR__.'/auth.php';
