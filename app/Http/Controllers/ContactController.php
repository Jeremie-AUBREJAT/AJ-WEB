<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
   
    public function sendContactEmail(Request $request)
{
    // Validation des données
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email',
        'telephone' => 'required|string|max:20',
        'message' => 'required|string',
        'rgpd' => 'required|accepted', // Assurez-vous que la case est cochée
        'honeypot' => 'nullable|string' // Champ honeypot
    ]);

    // Vérifier si le champ honeypot est rempli
    if (!empty($request->input('honeypot'))) {
        // Champ honeypot rempli, ne pas envoyer l'email
        return redirect()->back()->with('error', 'Votre soumission semble suspecte. Merci de réessayer.');
    }

    // Vérifier si la case RGPD est cochée
    if (!$request->input('rgpd')) {
        // Case RGPD non cochée, ne pas envoyer l'email
        return redirect()->back()->with('error', 'Vous devez accepter la politique de confidentialité pour envoyer le message.');
    }

    // Préparation des données de l'email
    $data = [
        'nom' => $validated['nom'],
        'prenom' => $validated['prenom'],
        'email' => $validated['email'],
        'telephone' => $validated['telephone'],
        'message' => $validated['message'],
        'rgpd' => $validated['rgpd'] ? 'Acceptée' : 'Non acceptée'
    ];

    // Envoi de l'email
    Mail::to(env('CONTACT_EMAIL'))->send(new ContactMail(
                 $validated['nom'],
                 $validated['prenom'],
                 $validated['email'],
                 $validated['telephone'],
                 $validated['message'],
                 $validated['rgpd']
               
             ));

    // Redirection après l'envoi de l'e-mail
    return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous contacterons bientôt.');
}

}
