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
        ]);

        // Envoi de l'email
        Mail::to(env('CONTACT_EMAIL'))->send(new ContactMail(
            $validated['nom'],
            $validated['prenom'],
            $validated['email'],
            $validated['telephone'],
            $validated['message'],
           
        ));

        // Redirection après l'envoi de l'e-mail
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous contacterons bientôt.');
    }
}
