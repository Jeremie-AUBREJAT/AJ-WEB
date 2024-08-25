@extends('layouts.appsecond')
@section('title', 'Laissez un Avis - AJ-Web')

@section('meta-description', "Partagez votre expérience avec AJ-Web en laissant un avis via notre formulaire simple et rapide. Votre retour est précieux pour nous aider à améliorer nos services et à offrir une meilleure expérience à nos clients.")
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
        <h1 class="text-xl lg:text-3xl font-bold mt-4 mx-auto text-white text-center text-shadow-custom">LAISSEZ VOTRE AVIS</h1>
    </section>
<div class="container mx-auto px-4 py-6 mt-8">
    <h2 class="text-3xl text-sky-700 font-semibold mb-6 ml-2">VOTRE AVIS: </h2>
    @if(session('success'))
    <div class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        {{ session('success') }}
    </div>
@endif
    <form action="{{ route('review.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Prénom :</label>
            <input type="text" id="name" name="name" 
                   class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm" 
                   required placeholder="Entrez votre prénom">
                   @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email :</label>
            <input type="email" id="email" name="email" 
                   class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm" 
                   required placeholder="Entrez votre adresse email">
                   @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4">
            <label for="review" class="block text-gray-700 text-sm font-medium mb-2">Avis :</label>
            <textarea id="review" name="review" 
                      class="form-textarea mt-1 block w-full border border-gray-300 rounded-md shadow-sm" 
                      rows="4" required placeholder="Entrez votre avis" maxlength="500"></textarea>
                      @error('review')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-medium mb-2">Note :</label>
            <div id="rating" class="flex items-center space-x-1">
                @for ($i = 1; $i <= 5; $i++)
                    <svg class="star w-8 h-8 cursor-pointer text-gray-400" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" data-value="{{ $i }}">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                @endfor
            </div>
            @error('rating')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <span id="ratingError" class="text-red-500 text-sm"></span>
            <input type="hidden" name="rating" id="rating-input" value="">
        </div>
        <!-- Case à cocher RGPD -->
        <div class="flex items-center mb-4">

            <input type="checkbox" id="rgpd" name="rgpd" required class="mr-2 rounded-md" value="1">
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

        <div class="flex justify-center">
            <button type="submit" 
                    class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Envoyer
            </button>
        </div>
    </form>
   

</div>
@endsection