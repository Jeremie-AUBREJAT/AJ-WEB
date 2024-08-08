@extends('layouts.appsecond')

@section('content')
{{-- section sites web --}}
<section class="container mx-auto px-4 py-16 bg-gray-50">
    <div class="flex justify-center items-center space-x-4">
        <!-- Premier SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
            style="fill: #0369a1; display: block;">
            <path
                d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z">
            </path>
        </svg>
        <!-- Deuxième SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
            class="fill-current text-sky-700 ml-4 mr-2">
            <path d="m19 12-7-6v5H6v2h6v5z" />
        </svg>
        <!-- Troisième SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="48" height="48" style="display: block; fill: #0369a1;">
            <path d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
        </svg>
    </div>


    <h1 class="text-2xl font-bold mt-4 mx-auto text-sky-700 text-center">CRÉATIONS WEB</h1>
    <div class="text-center mb-8">
        <p class="text-gray-700 text-lg my-12 mx-12">
            Découvrez toutes nos créations web ci-dessous. Chaque site est cliquable et vous redirigera vers sa version en ligne. N'hésitez pas à explorer les projets pour voir mes compétences en action et en savoir plus sur ce que j'ai réalisé.
        </p>
    </div>
    <div class="flex justify-center space-x-4 my-16">
        <!-- Bouton Tous -->
        <button class="filter-button w-32 h-12 bg-sky-700 text-white rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110" data-filter="all">Tous</button>
        
        <!-- Bouton Sites Vitrine -->
        <button class="filter-button w-32 h-12 bg-sky-700 text-white rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110" data-filter="site-vitrine">Sites Vitrine</button>
        
        <!-- Bouton E-commerce -->
        <button class="filter-button w-32 h-12 bg-sky-700 text-white rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110" data-filter="ecommerce">E-commerce</button>
    </div>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($websites as $website)
            <div class="relative overflow-hidden rounded-lg card" data-url="{{ $website->url }}">
                <!-- Image -->
                <div class="relative transition duration-300 transform hover:scale-105">
                    <img src="{{ asset($website->pictures->first()->path) }}"
                        class="w-full h-60 object-cover rounded-lg " alt="Image for {{ $website->name }}" />
                    
                    <!-- Title Overlay -->
                    <div class="absolute inset-x-0 top-0 bg-white bg-opacity-80 p-4 text-center title-overlay">
                        <h3 class="text-blue-950 text-2xl font-bold">{{ $website->name }}</h3>
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