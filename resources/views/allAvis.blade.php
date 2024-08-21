@extends('layouts.appsecond')
@section('title', 'Avis Clients - AJ-Web')

@section('meta-description', "Lisez les avis de nos clients satisfaits et découvrez pourquoi AJ-Web est le choix préféré pour la création de sites web vitrine et e-commerce. Découvrez des témoignages authentiques sur notre expertise et nos services.")
@section('content')
    <!-- all-reviews.blade.php -->
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
                class="fill-current text-white ml-4 mr-2" style="fill: #ffffff; stroke: #000000; stroke-width: 0.6px;">
                <path d="m19 12-7-6v5H6v2h6v5z" />
            </svg>
            <!-- Troisième SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                style="fill: #ffffff; stroke: #000000; stroke-width: 0.4px;">
                <path
                    d="M20 1.999H4c-1.103 0-2 .897-2 2v18l4-4h14c1.103 0 2-.897 2-2v-12c0-1.103-.897-2-2-2zm-6 11H7v-2h7v2zm3-4H7v-2h10v2z">
                </path>
            </svg>
        </div>
        <h1 class="text-3xl font-bold mt-4 mx-auto text-white text-center text-shadow-custom">AVIS CLIENTS</h1>
    </section>
    <section class="container mx-auto px-4 py-16 bg-gray-50">
        <div class="text-center mb-8">
            <p class="text-gray-700 text-lg my-12 mx-12">
                Bienvenue sur notre page d'avis clients ! Découvrez les évaluations et commentaires de ceux qui ont utilisé
                nos services. Utilisez notre système de notation par étoiles pour voir la note moyenne et lire les avis
                détaillés.
            </p>
        </div>
        <div class="my-12 lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>
        <!-- Filtrage par note d'étoile -->
        <div class="mb-6 lg:ml-12 flex items-center space-x-2">
            <label for="category-select"
                class="w-44 h-10 bg-sky-700 text-white text-center rounded-md font-semibold flex items-center justify-center">
                Filtrer par note:
            </label>
            <select id="category-select" class="bg-gray-100 border border-gray-300 rounded-lg p-2 pl-3 pr-8">
                <option value="">Toutes les notes</option>
                <option value="1">1 étoile</option>
                <option value="2">2 étoiles</option>
                <option value="3">3 étoiles</option>
                <option value="4">4 étoiles</option>
                <option value="5">5 étoiles</option>
            </select>
        </div>
        <!-- Afficher la note moyenne -->
        <div class="lg:ml-12  items-center">
            <h2 class="text-xl font-semibold mr-2 text-sky-700">NOTE MOYENNE:</h2>
            @php
                $averageRating = round($averageRating, 1); // Arrondir à une décimale
            @endphp
            <div class="flex items-center">
                @for ($i = 1; $i <= 5; $i++)
                    <svg class="w-5 h-5 {{ $i <= $averageRating ? 'text-yellow-400' : 'text-gray-300' }}"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24H14.81L12 2 9.19 9.24H2L7.46 13.97 5.82 21z" />
                    </svg>
                @endfor
            </div>
        </div>
        <a href="/avis/créer"
            class="inline-block bg-sky-700 text-white py-2 px-4 my-4 lg:ml-12 rounded-md hover:bg-sky-900">
            Laisser un avis
        </a>
        <!-- Avis Container -->
        <div id="reviewsContainer" class="flex flex-col lg:mx-8">
            @forelse ($reviews as $review)
                <div class="review-item w-full lg:px-4 mb-4">
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                        <p class="text-gray-600 text-sm mb-2">Le:
                            {{ \Carbon\Carbon::parse($review->created_at)->translatedFormat('d F Y') }}</p>
                        <div class="flex items-center mb-2">
                            <h2 class="text-lg font-semibold mr-2">{{ $review->name }}</h2>
                            <div class="flex">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 17.27L18.18 21 16.54 13.97 22 9.24H14.81L12 2 9.19 9.24H2L7.46 13.97 5.82 21z" />
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <p class="text-gray-600">{{ Str::limit($review->review, 500) }}</p>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500">Aucun avis disponible pour le moment.</p>
            @endforelse
        </div>
    </section>
    <script>
        // Passer les avis au JavaScript via un attribut data
        window.reviewsData = @json($reviews);
    </script>
    
@endsection
