<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');

// });
Route::get('/', [HomeController::class, 'indexHome'])->name('home');
Route::get('/all-websites', [WebsiteController::class, 'indexFront'])->name('websites.all');
Route::view('/mentionslegales', 'mentionslegales')->name('mentionslegales');
Route::get('/politique-confidentialite', function () {
    return view('privacypolicies');
})->name('politique-confidentialite');

// Route::get('/', [ReviewController::class, 'showHome'])->name('home');
Route::get('/allreviews', [ReviewController::class, 'showallreviews'])->name('home');
// contact
Route::get('/contact', function () {
    return view('contact'); // Assure-toi que cette vue existe
})->name('contact.form');
// Route pour traiter le formulaire de contact
Route::post('/contact/send', [ContactController::class, 'sendContactEmail'])->name('contact.send');



// Route pour afficher le formulaire de soumission d'avis en front
Route::get('/review/create', [ReviewController::class, 'create'])->name('review.create');
// Route pour soumettre un avis en front
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // route back website
    Route::get('/websites/create', [WebsiteController::class, 'create'])->name('websites.create');
    Route::post('/websites', [WebsiteController::class, 'store'])->name('websites.store');
    Route::get('/websites', [WebsiteController::class, 'index'])->name('websites.index');
    Route::get('/websites/{id}/edit', [WebsiteController::class, 'edit'])->name('websites.edit');
    Route::put('/websites/{id}', [WebsiteController::class, 'update'])->name('websites.update');
    Route::delete('/websites/{id}', [WebsiteController::class, 'destroy'])->name('websites.destroy');
    // Afficher tous les avis pour modération
    Route::get('/reviews', [ReviewController::class, 'index'])->name('review.index');

    // Afficher les détails d'un avis spécifique
    Route::get('/reviews/{id}', [ReviewController::class, 'show'])->name('review.show');

    // Approuver un avis
    Route::patch('/reviews/{id}/approve', [ReviewController::class, 'approve'])->name('review.approve');

    // Rejeter un avis
    Route::delete('/reviews/{id}/reject', [ReviewController::class, 'reject'])->name('review.reject');
});

require __DIR__ . '/auth.php';
