<?php 

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Méthode pour afficher la vue d'accueil avec les derniers avis
    // public function showHome()
    // {
    //     // Récupérer les 5 derniers avis approuvés
    //     $reviews = Review::where('approved', true)
    //                       ->latest()
    //                       ->take(5)
    //                       ->get();

    //     return view('home', compact('reviews'));
    // }
    

public function showallreviews()
{
    // Récupérer tous les avis approuvés
    $reviews = Review::where('approved', true)->get();
    
    // Calculer la moyenne des notes
    $averageRating = $reviews->avg('rating');
    
    // Passer les avis et la note moyenne à la vue
    return view('allAvis', compact('reviews', 'averageRating'));
}
    
    // Affichage du formulaire d'avis
    public function create()
    {
        return view('formAvis');
    }

    // Soumettre le formulaire d'avis
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Création de l'avis
        Review::create($validated);

        // Redirection avec message de succès
        return redirect()->back()->with('success', 'Votre avis a été soumis. Il sera visible après validation.');
    }



    // methode backend
    // Afficher tous les avis pour modération
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    // Afficher un avis spécifique
    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('reviews.show', compact('review'));
    }

    // Approuver un avis
    public function approve($id)
    {
        $review = Review::findOrFail($id);
        $review->approved = true;
        $review->save();

        return redirect()->route('review.index')->with('success', 'L\'avis a été approuvé.');
    }

    // Rejeter un avis
    public function reject($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('review.index')->with('success', 'L\'avis a été supprimé.');
    }
}

