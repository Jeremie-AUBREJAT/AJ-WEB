@extends('layouts.appsecond')

@section('content')

<div class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-8 text-center">Tous les sites</h1>
{{-- pour le front --}}
    {{-- <div class="flex flex-wrap justify-center gap-8">
        @foreach ($websites as $website)
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
                <h2 class="text-xl font-semibold mb-2 text-center">{{ $website->name }}</h2>
                
                @if ($website->pictures->isNotEmpty())
                    <div class="flex flex-wrap justify-center gap-2 mb-4">
                        @foreach ($website->pictures as $picture)
                        <div class="w-10 bg-gray-100 p-8 overflow-hidden flex items-center justify-center">
                            <img src="{{ asset($picture->path) }}" class="object-cover w-full h-full rounded" alt="Image for {{ $website->name }}">
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-500 text-center">Aucune image disponible.</p>
                @endif
                
                <a href="{{ $website->url }}" class="text-blue-500 hover:underline block text-center">{{ $website->url }}</a>
            </div>
        @endforeach
    </div> --}}
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
        @foreach ($websites as $website)
            <div class="bg-white p-6 rounded-lg shadow-lg w-full">
                <h2 class="text-xl font-semibold mb-2 text-center">{{ $website->name }}</h2>
    
                <!-- Afficher les détails du site web -->
                <div class="mb-4 text-center">
                    <p class="text-gray-700 mb-1"><strong>URL:</strong> <a href="{{ $website->url }}" class="text-blue-500 hover:underline">{{ $website->url }}</a></p>
                    <p class="text-gray-700 mb-1"><strong>Owner Name:</strong> {{ $website->owner_name }}</p>
                    <p class="text-gray-700 mb-1"><strong>Owner Address:</strong> {{ $website->owner_address }}</p>
                    <p class="text-gray-700 mb-1"><strong>Phone Number:</strong> {{ $website->phone_number }}</p>
                    <p class="text-gray-700 mb-1"><strong>Email:</strong> <a href="mailto:{{ $website->email }}" class="text-blue-500 hover:underline">{{ $website->email }}</a></p>
                </div>
    
                <!-- Afficher les images -->
                @if ($website->pictures->isNotEmpty())
                    <div class="flex flex-wrap justify-center gap-2 mb-4">
                        @foreach ($website->pictures as $picture)
                        <div class="w-24 h-24 bg-gray-100 p-1 overflow-hidden flex items-center justify-center">
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
    
                <!-- Lien vers le site web -->
                <a href="{{ $website->url }}" class="text-blue-500 hover:underline block text-center mt-4">{{ $website->url }}</a>
            </div>
        @endforeach
    </div>
    
    
    
</div>

@endsection
