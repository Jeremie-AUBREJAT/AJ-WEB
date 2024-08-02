@extends('layouts.appsecond')

@section('content')
<div class="container mx-auto px-4 py-6 mt-8">
    <h1 class="text-2xl font-bold mb-4">Gestion des Avis</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Succès !</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nom</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Avis</th>
                <th class="py-2 px-4 border-b">Note</th>
                <th class="py-2 px-4 border-b">Statut</th> <!-- Nouvelle colonne pour le statut -->
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reviews as $review)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $review->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $review->email }}</td>
                    <td class="py-2 px-4 border-b">{{ Str::limit($review->review, 50) }}</td>
                    <td class="py-2 px-4 border-b">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg class="w-4 h-4 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24H14.81L12 2 9.19 9.24H2L7.46 13.97 5.82 21z"/>
                            </svg>
                        @endfor
                    </td>
                    <td class="py-2 px-4 border-b">
                        @if ($review->approved)
                            <span class="text-green-500">Approuvé</span>
                        @else
                            <span class="text-red-500">Non approuvé</span>
                        @endif
                    </td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('review.show', $review->id) }}" class="text-blue-500 hover:text-blue-700">Voir</a>
                        @if (!$review->approved)
                            <form action="{{ route('review.approve', $review->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="text-green-500 hover:text-green-700 ml-2">Approuver</button>
                            </form>
                            <form action="{{ route('review.reject', $review->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Rejeter</button>
                            </form>
                        @else
                            <span class="text-gray-500 ml-2">Déjà approuvé</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="py-2 px-4 text-center border-b">Aucun avis en attente.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
