@extends('layouts.appsecond')
@section('title', 'Contactez nous')

@section('meta-description',
    "Contactez-nous via notre formulaire facile à utiliser pour toutes vos demandes.
    Obtenez des réponses rapides et personnalisées pour vos questions ou projets. Nous sommes là pour vous aider !")
@section('content')
    <section class="container mx-auto px-4 py-16 bg-gray-50 mt-8 section-background">
        <div class="flex justify-center items-center space-x-4">
            <!-- Premier SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                style="fill: #ffffff; stroke: #000000; stroke-width: 0.5px;">
                <path
                    d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z">
                </path>
            </svg>
            <!-- Deuxième SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                style="fill: #ffffff; stroke: #000000; stroke-width: 0.6px;" class="fill-current text-white ml-4 mr-2">
                <path d="m19 12-7-6v5H6v2h6v5z" />
            </svg>
            <!-- Troisième SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                style="fill: #ffffff; stroke: #000000; stroke-width: 0.4px;">
                <path
                    d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z">
                </path>
            </svg>
        </div>
        <h1 class="text-xl lg:text-3xl font-bold mt-4 mx-auto text-white text-center text-shadow-custom">CONTACT</h1>
    </section>
    <!-- Texte descriptif -->

    <div class="container mx-auto px-4 py-16 bg-gray-50">
        <div class="text-center mb-8">
            @if(session('success'))
            <div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                {{ session('error') }}
            </div>
        @endif
            <p class="text-gray-700 text-lg my-12 mx-12">Si vous avez une question, une demande ou tout autre besoin,
                n'hésitez pas à nous
                contacter en remplissant le formulaire ci-dessous. Nous reviendrons vers vous dans les plus brefs
                délais.</p>
        </div>
        <div class="my-12 lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>
        <form id="contactForm" action="/contact/send" method="POST" class="max-w-4xl mx-auto my-4 px-4">
            @csrf

            <div class="lg:flex lg:justify-between lg:items-start">
                <!-- Informations personnelles -->
                <div class="mt-4 lg:w-1/2 lg:pr-4 mb-4">
                    <label for="nom" class="block mb-2">Nom :</label>
                    <span id="nomError" class="text-red-500 text-sm"></span>
                    <input type="text" id="nom" name="nom" required placeholder='Entrez votre nom'
                        class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4 bg-white">
                    @error('nom')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <label for="prenom" class="block mb-2">Prénom :</label>
                    <span id="prenomError" class="text-red-500 text-sm"></span>
                    <input type="text" id="prenom" name="prenom" required placeholder='Entrez votre prénom'
                        class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4">
                    @error('prenom')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <label for="email" class="block mb-2">Email :</label>
                    <span id="emailError" class="text-red-500 text-sm"></span>
                    <input type="email" id="email" name="email" required placeholder="Entrez votre E-mail"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4">
                    @error('email')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Informations supplémentaires -->
                <div class="lg:w-1/2 lg:pl-4 mt-4">
                    <label for="telephone" class="block mb-2">Téléphone :</label>
                    <span id="telephoneError" class="text-red-500 text-sm"></span>
                    <input type="tel" id="telephone" name="telephone" required
                        placeholder='Entrez votre numéro de téléphone'
                        class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4">
                    @error('telephone')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <label for="message" class="block mb-2">Votre message :</label>
                    <span id="messageError" class="text-red-500 text-sm"></span>
                    <textarea id="message" name="message" required placeholder='Entrez votre message (500 caractères maximum)'
                        class="w-full border border-gray-300 rounded-md px-3 py-2 mb-4" rows="7"></textarea>
                    @error('message')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Case à cocher RGPD -->
            <div class="flex items-center mb-4">

                <input type="checkbox" id="rgpd" name="rgpd" required class="mr-2 rounded-md" value="on">
                <label for="rgpd" class="text-gray-700">
                    J'accepte la <a href="/politique-confidentialite" class="text-blue-600 hover:underline"
                        target="_blank">Politique de confidentialité</a>.
                    @error('rgpd')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </label>
            </div>
            <span id="rgpdError" class="text-red-500 text-sm"></span>
            <!-- Champ anti-bot (Honeypot) -->
            <div style="display:none;">
                <label for="honeypot">Si vous êtes un humain, laissez ce champ vide :</label>
                <input type="text" id="honeypot" name="honeypot">
            </div>

            <!-- Bouton d'envoi -->
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="bg-sky-700 text-white py-2 px-4 rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110">Envoyer</button>
            </div>
        </form>
    </div>
@endsection
