@extends('layouts.appsecond')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold my-8">Mise à jour Website</h1>

    <form action="{{ route('websites.update', $website->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nom du site</label>
            <input type="text" id="name" name="name" value="{{ old('name', $website->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="url" class="block text-gray-700">URL</label>
            <input type="url" id="url" name="url" value="{{ old('url', $website->url) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="owner_name" class="block text-gray-700">Nom/prénom client</label>
            <input type="text" id="owner_name" name="owner_name" value="{{ old('owner_name', $website->owner_name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="owner_address" class="block text-gray-700">Adresse client</label>
            <input type="text" id="owner_address" name="owner_address" value="{{ old('owner_address', $website->owner_address) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="phone_number" class="block text-gray-700">Numéro de téléphone</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $website->phone_number) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $website->email) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="images" class="block text-gray-700">Image (JPG/JPEG)</label>
            <input type="file" id="images" name="images[]" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Image actuelle: </label>
            <div class="flex flex-wrap gap-2">
                @foreach ($pictures as $picture)
                    <div class="w-1/3 bg-gray-100 p-1 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset($picture->path) }}" class="object-cover w-full h-full rounded" alt="Image">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-medium mb-2">Categories:</label>
            <select id="category" name="category" class="form-select w-full border-gray-300 rounded-md shadow-sm">
                <option value="E-commerce" {{ old('category', $website->category) == 'E-commerce' ? 'selected' : '' }}>E-commerce</option>
                <option value="Site-vitrine" {{ old('category', $website->category) == 'Site-vitrine' ? 'selected' : '' }}>Site Vitrine</option>
                <option value="Blog-forum" {{ old('category', $website->category) == 'Blog-forum' ? 'selected' : '' }}>Blog/Forum</option>
                <option value="En-développement" {{ old('category', $website->category) == 'En-développement' ? 'selected' : '' }}>En développement</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-medium mb-2">Description:</label>
            <textarea id="description" name="description" rows="4" class="form-input w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $website->description) }}</textarea>
        </div>

        

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Mettre à jour</button>
    </form>
</div>
@endsection
