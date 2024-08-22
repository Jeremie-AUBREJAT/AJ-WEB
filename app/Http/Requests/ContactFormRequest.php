<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom' => 'required|string|min:2|max:50',
            'prenom' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'telephone' => 'required|string|size:10',
            'message' => 'required|string|min:10|max:500',
            'rgpd' => 'required|accepted',
            'honeypot' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est requis.',
            'nom.min' => 'Le nom doit comporter au moins 2 caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 50 caractères.',
            'prenom.required' => 'Le prénom est requis.',
            'prenom.min' => 'Le prénom doit comporter au moins 2 caractères.',
            'prenom.max' => 'Le prénom ne peut pas dépasser 50 caractères.',
            'email.required' => 'L\'adresse e-mail est requise.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'telephone.required' => 'Le numéro de téléphone est requis.',
            'telephone.size' => 'Le numéro de téléphone doit comporter exactement 10 caractères.',
            'message.required' => 'Le message est requis.',
            'message.min' => 'Le message doit comporter au moins 10 caractères.',
            'message.max' => 'Le message doit comporter au maximum 500 caractères.',
            'rgpd.required' => 'Vous devez accepter la politique de confidentialité.',
            'rgpd.accepted' => 'Vous devez accepter la politique de confidentialité.',
        ];
    }
}

