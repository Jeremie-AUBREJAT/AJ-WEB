<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/reviewStars.js', 'resources/js/reviewFilter.js', 'resources/js/blurcard.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJW développeur web freelance</title>
    <link rel="icon" href="{{ asset('images/ajweb.svg') }}" type="image/svg+xml">
</head>

<body>
    <header>
        <div id="desknav"
            class="h-10 flex justify-between items-center top-0 fixed w-full z-20 bg-gradient-to-r from-gray-700 to-gray-900">

            <div class="flex items-center">
                <img src="{{ asset('images/ajweb.svg') }}" class="p-6 w-20" alt="Logo">

                <a href="/"
                    class="text-3xl text-white px-4 font-bold italic transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">
                    AJ-WEB
                </a>

            </div>
            @auth
                <div class="flex space-x-4"> <!-- Ajouté espace entre les boutons -->
                    <a href="/dashboard"
                        class="inline-block bg-blue-600 text-white font-semibold text-lg py- px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
                        Tableau de bord
                    </a>
                </div>
            @endauth
            <nav class="bg-gray-00 text-white py- px-6 flex justify-between items-center shadow-md">

                {{-- <div class="space-x-4"> --}}
                <a href="/"
                    class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">ACCUEIL</a>
                <a href="#services"
                    class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">SERVICES</a>
                <a href="#creations"
                    class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">CRÉATIONS
                    WEB</a>
                <a href="/contact"
                    class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">CONTACT</a>

        </div>
        </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-gradient-to-r from-gray-900 to-gray-700 text-white py-8">
        <div class="container mx-auto grid grid-rows-2 ">

            <div class="mx-auto">
                <a href="mentionslegales.php#mentions"
                    class="font-semibold italic inline-block px-4 py-2 text-gray-100 border border-gray-200 bg-gray-600 rounded-full hover:bg-gray-500 transition duration-300 shadow-2xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">Mentions
                    Légales</a>
            </div>

            <div class="mx-auto">
                <a href="/">
                    <img src="{{ asset('images/ajweb.svg') }}" class="mx-auto w-20" alt="Logo">
                </a>

                <div class="italic">&copy; 2024 AJ-WEB. Tous droits réservés.</div>
            </div>
        </div>
    </footer>
</body>

</html>
