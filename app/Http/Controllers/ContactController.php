<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function sendContactEmail(ContactFormRequest $request)
    {
        // Vérifier si le champ honeypot est rempli
        if (!empty($request->input('honeypot'))) {
            // Champ honeypot rempli, ne pas envoyer l'email
            return redirect()->back()->with('error', 'Votre soumission semble suspecte. Merci de réessayer.');
        }
    
        // Préparation des données de l'email
        $data = [
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'message' => $request->input('message'),
            'rgpd' => $request->input('rgpd') ? 'Acceptée' : 'Non acceptée'
        ];
    
        // Envoi de l'email
        Mail::to(env('CONTACT_EMAIL'))->send(new ContactMail(
            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['telephone'],
            $data['message'],
            $data['rgpd']
        ));
    
        // Redirection après l'envoi de l'e-mail
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous contacterons bientôt.');
    }

}
