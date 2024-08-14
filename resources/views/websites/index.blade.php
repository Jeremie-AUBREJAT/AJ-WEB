@extends('layouts.appsecond')

@section('content')

<div class="bg-gray-100 p-8 mt-8">
    <h1 class="text-3xl font-bold mb-8 text-center">Tous les sites</h1>
    <div class="flex flex-wrap gap-4 my-8 justify-center"> <!-- Utilisation de flex-wrap pour les petits écrans et ajustement du centrage -->
        <a href="/" class="inline-block bg-blue-600 text-white font-semibold text-base py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Accueil
        </a>
        <a href="/websites" class="inline-block bg-blue-600 text-white font-semibold text-base py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Tout les sites
        </a>
        <a href="/reviews" class="inline-block bg-blue-600 text-white font-semibold text-base py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Tout les avis
        </a>
        <a href="/websites/create" class="inline-block bg-blue-600 text-white font-semibold text-base py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Ajouter un site
        </a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-8">
        @foreach ($websites as $website)
            <div class="bg-white p-6 rounded-lg shadow-lg w-full">
                <h2 class="text-xl font-semibold mb-2 text-center">{{ $website->name }}</h2>
    
                <!-- Afficher les détails du site web -->
                <div class="mb-4 text-center">
                    <p class="text-gray-700 mb-1"><strong>URL:</strong> <a href="{{ $website->url }}" class="text-blue-500 hover:underline">{{ $website->url }}</a></p>
                    <p class="text-gray-700 mb-1"><strong>Nom du site:</strong> {{ $website->name }}</p>
                    <p class="text-gray-700 mb-1"><strong>Nom du client:</strong> {{ $website->owner_name }}</p>
                    <p class="text-gray-700 mb-1"><strong>Adresse du client:</strong> {{ $website->owner_address }}</p>
                    <p class="text-gray-700 mb-1"><strong>Numéro de téléphone:</strong> {{ $website->phone_number }}</p>
                    <p class="text-gray-700 mb-1"><strong>Email:</strong> <a href="mailto:{{ $website->email }}" class="text-blue-500 hover:underline">{{ $website->email }}</a></p>
                </div>
    
                <!-- Afficher les images -->
                @if ($website->pictures->isNotEmpty())
                    <div class="flex flex-wrap justify-center gap-2 mb-4">
                        @foreach ($website->pictures as $picture)
                        <div class="w-full bg-gray-100 p-1 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset($picture->path) }}" class="object-cover w-full h-full rounded" alt="Image for {{ $website->name }}">
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center">Aucune image disponible.</p>
                @endif
    
                <!-- Boutons Modifier et Supprimer -->
                <div class="flex justify-center gap-4 mt-4">
                    <a href="{{ route('websites.edit', $website->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Modifier</a>

                    <form action="{{ route('websites.destroy', $website->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Supprimer</button>
                    </form>
                </div>
    
                <p class="text-gray-700 mb-1 text-center"><strong>catégorie:</strong> {{ $website->category }}</p>
            </div>
        @endforeach
    </div>
    
    
    
</div>

@endsection
