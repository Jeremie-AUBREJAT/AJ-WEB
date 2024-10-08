<?php 

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReviewRequest;

class ReviewController extends Controller
{
    //Methode Front
    public function showallreviews()
    {
        // Récupérer tous les avis approuvés
        $reviews = Review::where('approved', true)->get();
        
        // Masquer le champ 'email' de chaque avis
        $reviews->makeHidden('email');
        
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
    public function store(StoreReviewRequest $request)
{
    // Vérifier si le champ honeypot est rempli
    if (!empty($request->input('honeypot'))) {
        // Champ honeypot rempli, ne pas envoyer l'email
        return redirect()->back()->with('error', 'Votre soumission semble suspecte. Merci de réessayer.');
    }

    // Création de l'avis
    Review::create($request->validated());

    // Redirection avec message de succès
    return redirect()->back()->with('success', 'Votre avis a été soumis. Il sera visible après validation.');
}



    // methode backend
    // Afficher tous les avis pour modération
    public function index()
{
    // Récupérer tous les avis, triés par statut d'approbation (non approuvés en premier) et date de création (plus récent en premier)
    $reviews = Review::orderBy('approved', 'asc')  // Trier par statut d'approbation (non approuvés avant approuvés)
                      ->orderBy('created_at', 'desc') // Trier par date de création décroissante
                      ->get();
    
    // Passer les avis à la vue
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

