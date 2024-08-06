<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Review;
use App\Models\Picture;

class HomeController extends Controller
{
    public function indexHome()
{
    // Récupérer les 4 derniers sites web avec leurs images associées
    $websites = Website::with('pictures')
                        ->latest() // Trie les résultats par date de création en ordre décroissant
                        ->limit(4) // Limite le nombre de résultats à 4
                        ->get();

    // Récupérer tous les avis approuvés
    $reviews = Review::where('approved', true)->get();
    
    // Calculer la moyenne des notes
    $averageRating = $reviews->avg('rating');

    // Passer les données à la vue
    return view('home', compact('websites', 'reviews', 'averageRating'));
}
}
