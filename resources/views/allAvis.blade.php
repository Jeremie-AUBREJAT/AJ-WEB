@extends('layouts.appsecond')

@section('content')
<!-- all-reviews.blade.php -->
<section class="container mx-auto px-4 py-8 bg-white my-8">
    <h1 class="text-2xl font-bold mb-6 ml-10 text-gray-800">Tous les Avis Clients</h1>

    <!-- Filtrage par note d'étoile -->
    <div class="mb-6 ml-10 flex items-center space-x-2">
        <label for="ratingFilter" class="text-lg font-semibold text-gray-800">Filtrer par note:</label>
        <select id="ratingFilter" class="bg-gray-100 border border-gray-300 rounded-lg p-2 pl-3 pr-8">
            <option value="">Toutes les notes</option>
            <option value="1">1 étoile</option>
            <option value="2">2 étoiles</option>
            <option value="3">3 étoiles</option>
            <option value="4">4 étoiles</option>
            <option value="5">5 étoiles</option>
        </select>
    </div>
    
    <!-- Afficher la note moyenne -->
    <div class="ml-10 mb-6 flex items-center">
        <h2 class="text-xl font-semibold mr-2">Note Moyenne:</h2>
        @php
            $averageRating = round($averageRating, 1); // Arrondir à une décimale
        @endphp
        <div class="flex items-center">
            @for ($i = 1; $i <= 5; $i++)
                <svg class="w-5 h-5 {{ $i <= $averageRating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24H14.81L12 2 9.19 9.24H2L7.46 13.97 5.82 21z"/>
                </svg>
            @endfor
        </div>
    </div>

    <!-- Avis Container -->
    <div id="reviewsContainer" class="flex flex-col mx-4">
        @forelse ($reviews as $review)
            <div class="review-item w-full px-4 mb-4">
                <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4">
                    <p class="text-gray-600 text-sm mb-2">Le: {{ \Carbon\Carbon::parse($review->created_at)->translatedFormat('d F Y') }}</p>
                    <div class="flex items-center mb-2">   
                        <h2 class="text-lg font-semibold mr-2">{{ $review->name }}</h2>
                        <div class="flex">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24H14.81L12 2 9.19 9.24H2L7.46 13.97 5.82 21z"/>
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
<script src="{{ asset('js/filter-reviews.js') }}"></script>

@endsection