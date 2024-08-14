@extends('layouts.appsecond')

@section('content')
<div class="container mx-auto px-4 py-6 mt-8">
    <h1 class="text-2xl font-bold mb-4">Gestion des Avis</h1>

    <!-- Section pour les boutons -->
    <div class="flex flex-wrap justify-center gap-4 my-8">
        <a href="/" class="inline-block bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Accueil
        </a>
        <a href="/websites" class="inline-block bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Tous les sites
        </a>
        <a href="/reviews" class="inline-block bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Tous les avis
        </a>
        <a href="/websites/create" class="inline-block bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Ajouter un site
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Succès !</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Section des cartes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6">
        @forelse ($reviews as $review)
            <div class="bg-white border border-gray-200 rounded-lg shadow p-6 flex flex-col">
                <h2 class="text-xl font-semibold mb-2">{{ $review->name }}</h2>
                <p class="text-gray-600 text-sm mb-2">Le:
                    {{ \Carbon\Carbon::parse($review->created_at)->translatedFormat('d F Y') }}</p>
                <p class="text-gray-600 mb-4">{{ $review->email }}</p>
                <p class="text-gray-800 mb-4">{{ Str::limit($review->review, 100) }}</p>
                <div class="flex items-center mb-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24H14.81L12 2 9.19 9.24H2L7.46 13.97 5.82 21z"/>
                        </svg>
                    @endfor
                </div>
                <p class="mb-4">
                    @if ($review->approved)
                        <span class="text-green-500">Approuvé</span>
                    @else
                        <span class="text-red-500">Non approuvé</span>
                    @endif
                </p>
                <div class="flex flex-wrap gap-2 mt-auto">
                    <a href="{{ route('review.show', $review->id) }}" class="text-blue-500 hover:text-blue-700">Voir</a>
                    @if (!$review->approved)
                        <form action="{{ route('review.approve', $review->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="text-green-500 hover:text-green-700">Approuver</button>
                        </form>
                        <form action="{{ route('review.reject', $review->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Rejeter</button>
                        </form>
                    @else
                        <span class="text-gray-500">Déjà approuvé</span>
                    @endif
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-4">Aucun avis en attente.</div>
        @endforelse
    </div>
</div>
@endsection
