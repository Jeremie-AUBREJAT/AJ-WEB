@extends('layouts.appsecond')

@section('content')

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg mt-8 mx-auto">
        <h1 class="text-2xl font-bold mb-6">Create a New Website</h1>
        <form action="{{ route('websites.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name:</label>
                <input type="text" id="name" name="name" required class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-medium mb-2">URL:</label>
                <input type="url" id="url" name="url" required class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="owner_name" class="block text-gray-700 font-medium mb-2">Owner Name:</label>
                <input type="text" id="owner_name" name="owner_name" required class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="owner_address" class="block text-gray-700 font-medium mb-2">Owner Address:</label>
                <input type="text" id="owner_address" name="owner_address" required class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="phone_number" class="block text-gray-700 font-medium mb-2">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" required class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email:</label>
                <input type="email" id="email" name="email" required class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="images" class="block text-gray-700 font-medium mb-2">Images:</label>
                <input type="file" id="images" name="images[]" multiple class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="images" class="block text-gray-700 font-medium mb-2">Images:</label>
                <input type="file" id="images" name="images[]" multiple class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="images" class="block text-gray-700 font-medium mb-2">Images:</label>
                <input type="file" id="images" name="images[]" multiple class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="images" class="block text-gray-700 font-medium mb-2">Images:</label>
                <input type="file" id="images" name="images[]" multiple class="form-input w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Create Website</button>
        </form>
    </div>
</body>
</html>
@endsection