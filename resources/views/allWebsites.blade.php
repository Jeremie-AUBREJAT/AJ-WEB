@extends('layouts.appsecond')

@section('content')
{{-- section sites web --}}
<section class="container mx-auto px-4 py-8 bg-white mt-8">
    <div class="container text-center mx-auto mb-8">
        <img src="images/smartportfolio.png" alt="icone web" class="mx-auto w-20">
        <h2 class="inline-block px-4 py-2 text-black rounded-lg text-2xl font-semibold italic underline decoration-2">
            Créations web/Portfolio
        </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($websites as $website)
            <div class="relative overflow-hidden rounded-lg card" data-url="{{ $website->url }}">
                <!-- Image -->
                <div class="relative">
                    <img src="{{ asset($website->pictures->first()->path) }}"
                        class="w-full h-60 object-cover rounded-lg" alt="Image for {{ $website->name }}" />
                    
                    <!-- Title Overlay -->
                    <div class="absolute inset-x-0 top-0 bg-white bg-opacity-80 p-4 text-center title-overlay">
                        <h3 class="text-gray-800 text-xl font-bold">{{ $website->name }}</h3>
                    </div>
                    
                    <!-- Button SVG -->
                    <a href="{{ $website->url }}"
                        class="absolute bottom-4 left-1/2 transform -translate-x-1/2 inline-flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-white">
                            <path d="M8.465 11.293c1.133-1.133 3.109-1.133 4.242 0l.707.707 1.414-1.414-.707-.707c-.943-.944-2.199-1.465-3.535-1.465s-2.592.521-3.535 1.465L4.929 12a5.008 5.008 0 0 0 0 7.071 4.983 4.983 0 0 0 3.535 1.462A4.982 4.982 0 0 0 12 19.071l.707-.707-1.414-1.414-.707.707a3.007 3.007 0 0 1-4.243 0 3.005 3.005 0 0 1 0-4.243l2.122-2.121z"></path>
                            <path d="m12 4.929-.707.707 1.414 1.414.707-.707a3.007 3.007 0 0 1 4.243 0 3.005 3.005 0 0 1 0 4.243l-2.122 2.121c-1.133 1.133-3.109 1.133-4.242 0L10.586 12l-1.414 1.414.707.707c.943.944 2.199 1.465 3.535 1.465s2.592-.521 3.535-1.465L19.071 12a5.008 5.008 0 0 0 0-7.071 5.006 5.006 0 0 0-7.071 0z"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Description -->
                <div class="p-4">
                    <p class="text-gray-600">{{ Str::limit($website->description, 100) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection