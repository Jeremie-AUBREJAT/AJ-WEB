@extends('layouts.appsecond')

@section('content')
<div class="text-black text-2xl mt-16 font-semibold">CONTACT</div>
<form action="/contact/send" method="POST" class="max-w-4xl mx-auto my-12 px-4">
    @csrf
    <div class="lg:flex lg:justify-between lg:items-start">
        <div class="mt-4 lg:w-1/2 lg:pr-4 mb-4">
            <label for="nom" class="block mb-2">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder='Entrez votre nom' required class="w-full border border-gray-300 rounded-md px-3 py-2 mb-10">
            <label for="prenom" class="block mb-2">Prénom :</label>
            <input type="text" id="prenom" name="prenom"placeholder='Entrez votre prénom' required class="w-full border border-gray-300 rounded-md px-3 py-2 mb-10">
            <label for="email" class="block mb-2">Email :</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre E-mail" required class="w-full border border-gray-300 rounded-md px-3 py-2 mb-2">
        </div>
        <div class="lg:w-1/2 lg:pl-4 mt-4">
            <label for="telephone" class="block mb-2">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" placeholder='Entrez votre numéro de téléphone' required class="w-full border border-gray-300 rounded-md px-3 py-2 mb-2">
            <label for="message" class="block mb-2">Votre message :</label>
            <textarea id="message" name="message" placeholder='Entrez votre message' required class="w-full border border-gray-300 rounded-md px-3 py-2 mb-2" rows="7"></textarea>
        </div>
    </div>
    <div class="flex justify-center mt-4">
        <button type="submit" class="bg-blue-900 text-white py-2 px-4 rounded-md">Envoyer</button>
    </div>
</form>


@endsection
