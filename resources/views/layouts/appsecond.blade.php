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
                <a href="/#services"
                    class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">SERVICES</a>
                <a href="/#creations"
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
        <div class="container mx-auto px-4 flex flex-wrap justify-between items-start max-w-screen-lg">
            <!-- Section à gauche (4 SVG verticalement) -->
            <div class="flex flex-col space-y-4 mt-2">
               <a target="_blank" href="https://github.com/Jeremie-AUBREJAT" class="flex items-center space-x-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path>
                   </svg>
                   <span>GITHUB</span>
               </a>
               <a target="_blank" href="https://www.facebook.com/" class="flex items-center space-x-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                       <path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path>
                   </svg>
                   <span>FACEBOOK</span>
               </a>
               <a href="mailto:contact@aj-web.fr" class="flex items-center space-x-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                       <path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path>
                   </svg>
                   <span>contact@aj-web.fr</span>
               </a>
               <a target="_blank" href="https://www.google.fr/maps/place/La+Vall%C3%A9e,+18240+Savigny-en-Sancerre/@47.4141094,2.8032713,17z/data=!4m15!1m8!3m7!1s0x47f0027f624efdb1:0x526dcc015e0057df!2sLa+Vall%C3%A9e,+18240+Savigny-en-Sancerre!3b1!8m2!3d47.4141058!4d2.8058462!16s%2Fg%2F1tdn3f6h!3m5!1s0x47f0027f624efdb1:0x526dcc015e0057df!8m2!3d47.4141058!4d2.8058462!16s%2Fg%2F1tdn3f6h?entry=ttu" class="flex items-center space-x-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                       <path d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"></path>
                   </svg>
                   <span>18240 SAVIGNY-EN-SANCERRE</span>
               </a>
           </div>
           

            <!-- Section à droite -->
            <div class="flex flex-col items-center space-y-4 mx-auto lg:mx-0">
               
               <a href="/">
                   <img src="{{ asset('images/ajweb.svg') }}" class="w-20 mt-" alt="Logo">
               </a>
               <a href="/mentionslegales"
                   class="font-semibold italic text-lg text-white ">
                   Mentions Légales
               </a>
               <a href="/politique-confidentialite"
                   class="font-semibold italic text-lg text-white ">
                   Politique de confidentialité
               </a>
           </div>
           
        </div>
        <div class="italic mx-auto text-lg text-center my-6">&copy; 2024 aj-web.fr Tous droits réservés.</div>
    </footer>
</body>

</html>
