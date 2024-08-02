<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebsiteController;

Route::get('/', function () {
    return view('home');
   
});
// contact
Route::get('/contact', function () {
    return view('contact'); // Assure-toi que cette vue existe
})->name('contact.form');

// Route pour traiter le formulaire de contact
Route::post('/contact/send', [ContactController::class, 'sendContactEmail'])->name('contact.send');
// route back website
Route::get('/websites/create', [WebsiteController::class, 'create'])->name('websites.create');
Route::post('/websites', [WebsiteController::class, 'store'])->name('websites.store');
Route::get('/websites', [WebsiteController::class, 'index'])->name('websites.index');
Route::get('/websites/{id}/edit', [WebsiteController::class, 'edit'])->name('websites.edit');
Route::put('/websites/{id}', [WebsiteController::class, 'update'])->name('websites.update');
Route::delete('/websites/{id}', [WebsiteController::class, 'destroy'])->name('websites.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
