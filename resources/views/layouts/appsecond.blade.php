<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/js/app.js',])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJW développeur web freelance</title>
    <link rel="icon" href="images/ajweb.svg" type="image/svg+xml">
</head>

<body>
    <header>
        <div id="desknav"
            class="h-10 flex justify-between items-center top-0 fixed w-full z-20 bg-gradient-to-r from-gray-700 to-gray-900">
            <div class="flex items-center">
                <img src="images/ajweb.svg" class="p-6 w-20" alt="Logo">
                <div class="text-gray-200 italic font-bold text-3xl">AJ-WEB
                </div>
            </div>
            <nav class="flex items-center">
                <a href="/#competences"
                    class="underline decoration-1 text-gray-200 italic text-2xl p-4 mr-4 ">Services</a>
                <a href="/#portfolio" class="underline decoration-1 text-gray-200 italic text-2xl p-4 mr-4">Créations
                    web</a>
                <a href="#contact" class="underline decoration-1 text-gray-200 italic text-2xl p-4">Contact</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-gradient-to-r from-gray-900 to-gray-700 text-white py-8">
        <div class="container mx-auto grid grid-rows-2 ">

            <div class="mx-auto">
                <button>
                    <a href="mentionslegales.php#mentions"
                        class="font-semibold italic inline-block px-4 py-2 text-gray-100 border border-gray-200 bg-gray-600 rounded-full hover:bg-gray-500 transition duration-300 shadow-2xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">Mentions
                        Légales</a>
                </button>
            </div>

            <div class="mx-auto">
                <img src="images/ajweb.svg" class="mx-auto w-20" alt="Logo">
                <div class="italic">&copy; 2024 AJ-WEB. Tous droits réservés.</div>
            </div>
        </div>
    </footer>
</body>

</html>
