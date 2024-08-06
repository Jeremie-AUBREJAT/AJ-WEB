<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between mb-6">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex space-x-4"> <!-- Ajouté espace entre les boutons -->
                <a href="/" class="inline-block bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
                    Accueil
                </a>
                <a href="/websites" class="inline-block bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
                    Tout les sites
                </a>
                <a href="/reviews" class="inline-block bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
                    Tout les avis
                </a>
            </div>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
