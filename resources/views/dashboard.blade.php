@extends('layouts.appsecond')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between mb-6">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tableau de bord') }}
            </h2>
        </div>
    </x-slot>

    <!-- Section pour les liens -->
    <div class="mt-10 flex flex-wrap justify-center gap-4 mb-6"> <!-- Utilisation de flex-wrap pour le responsive design et gap pour l'espace entre les boutons -->
        <a href="/" class="bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Accueil
        </a>
        <a href="/websites" class="bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Tous les sites
        </a>
        <a href="/reviews" class="bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
            Tous les avis
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Vous etes connecté!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
