@extends('layouts.appsecond') <!-- Assurez-vous que le nom de votre layout est correct -->

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
                class="fill-current text-sky-700 ml-4 mr-2" style="fill: #ffffff; stroke: #000000; stroke-width: 0.6px;">
                <path d="m19 12-7-6v5H6v2h6v5z" />
            </svg>
            <!-- Troisième SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                style="fill: #ffffff; stroke: #000000; stroke-width: 0.4px;">
                <path
                    d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm4 10.723V20h-2v-2.277a1.993 1.993 0 0 1 .567-3.677A2.001 2.001 0 0 1 14 16a1.99 1.99 0 0 1-1 1.723z">
                </path>
            </svg>
        </div>
        <h1 class="text-xl lg:text-3xl font-bold mt-4 mx-auto text-white text-center text-shadow-custom">MENTIONS LÉGALES</h1>
    </section>

    <div class="container mx-auto px-4 py-16 bg-gray-50">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full text-gray-700">
            <section id="identification" class="mb-6">
                <h2 class="text-2xl font-semibold text-sky-700 mb-2">Identification</h2>
                <p>Nom de l'entreprise : AJ-WEB</p>
                <p>Adresse : 18240 Savigny-en-Sancerre, France</p>
                <p>Numéro de téléphone : +33 6 12 34 56 78</p>
                <p>Email : <a href="mailto:contact@aj-web.fr" class="text-sky-700 hover:underline">contact@aj-web.fr</a></p>
                <p>Directeur de la publication : Jérémie Aubrejat</p>
            </section>

            <section id="responsabilite" class="mb-6">
                <h2 class="text-2xl font-semibold text-sky-700 mb-2">Responsabilité</h2>
                <p>Le contenu du site est fourni à titre informatif. AJ-WEB ne peut être tenu responsable des erreurs ou
                    omissions dans les informations fournies.</p>
            </section>

            <section id="propriete-intellectuelle" class="mb-6">
                <h2 class="text-2xl font-semibold text-sky-700 mb-2">Propriété Intellectuelle</h2>
                <p>Tous les éléments du site, y compris les textes, images, logos, et graphiques, sont protégés par des
                    droits de propriété intellectuelle. Toute reproduction ou distribution est interdite sans autorisation.
                </p>
            </section>

            <section id="politique-confidentialite" class="mb-6">
                <h2 class="text-2xl font-semibold text-sky-700 mb-2">Politique de Confidentialité</h2>
                <p>Les données personnelles collectées par le formulaire de contact sont utilisées uniquement pour le
                    traitement des demandes et ne seront pas partagées avec des tiers sans votre consentement.</p>
            </section>

            <section id="cookies" class="mb-6">
                <h2 class="text-2xl font-semibold text-sky-700 mb-2">Cookies</h2>
                <p> Conformément à la réglementation en vigueur, nous vous informons que ce site web n'utilise aucun cookie.
                    Nous nous engageons à respecter votre vie privée et à ne collecter aucune donnée personnelle sans votre
                    consentement explicite.</p>
            </section>
        </div>
    </div>
@endsection
