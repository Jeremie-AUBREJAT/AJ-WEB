<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Autoriser l'accès à cette requête
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'review' => 'required|string|min:10|max:500', // Ajout d'une longueur minimale pour le message
            'rating' => 'required|integer|min:1|max:5',
            'rgpd' => 'required|accepted', // Validation du consentement RGPD
            'honeypot' => 'nullable|string' // Champ honeypot
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le prénom est requis.',
            'name.min' => 'Le prénom doit comporter au moins 2 caractères.',
            'name.max' => 'Le prénom ne peut pas dépasser 50 caractères.',
            'email.required' => 'L\'adresse e-mail est requise.',
            'review.required' => 'Le message est requis.',
            'review.min' => 'Le message doit comporter au moins 10 caractères et au maximum 500.',
            'rating.required' => 'La note est requise.',
            'rating.integer' => 'La note doit être un nombre entier.',
            'rating.min' => 'La note doit être d\'au moins 1 étoile.',
            'rating.max' => 'La note ne peut pas dépasser 5 étoiles.',
            'rgpd.required' => 'Vous devez accepter la politique de confidentialité.',
            'rgpd.accepted' => 'Vous devez accepter la politique de confidentialité.',
        ];
    }
}
