@extends('layouts.appsecond')

@section('content')
<div class="container mx-auto px-4 py-6 mt-8">
    <h1 class="text-3xl font-semibold mb-6">Laisser un avis</h1>
    
    <form action="{{ route('review.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Nom :</label>
            <input type="text" id="name" name="name" 
                   class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm" 
                   required placeholder="Entrez votre nom">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email :</label>
            <input type="email" id="email" name="email" 
                   class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm" 
                   required placeholder="Entrez votre adresse email">
        </div>

        <div class="mb-4">
            <label for="review" class="block text-gray-700 text-sm font-medium mb-2">Avis :</label>
            <textarea id="review" name="review" 
                      class="form-textarea mt-1 block w-full border border-gray-300 rounded-md shadow-sm" 
                      rows="4" required placeholder="Entrez votre avis" maxlength="500"></textarea>
        </div>

        <div class="mb-4">
            <label for="rating" class="block text-gray-700 text-sm font-medium mb-2">Note :</label>
            <div id="rating" class="flex items-center space-x-1">
                @for ($i = 1; $i <= 5; $i++)
                    <svg class="star w-8 h-8 cursor-pointer text-gray-400" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-value="{{ $i }}">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                @endfor
            </div>
            <input type="hidden" name="rating" id="rating-input" value="">
        </div>

        <div class="flex justify-center">
            <button type="submit" 
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Envoyer
            </button>
        </div>
    </form>
    @if(session('success'))
    <div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        {{ session('success') }}
    </div>
@endif

</div>
@endsection