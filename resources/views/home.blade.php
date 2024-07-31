@extends('layouts.appfirst')

@section('content')
<body class="bg-gradient-to-r from-gray-900 to-gray-700">


    <div id="content">
        <div class="mx-2 bg-gray-100 grid grid-cols-1 rounded-sm">
            <div class="flex flex-col justify-center items-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb- text-center my-8">Bienvenue chez AJ-WEB</h1>
                <p class="w-2/3 text-center px-8 text-xl">
                    Chez AJ-WEB, nous sommes spécialisés dans le développement web sur mesure pour répondre aux besoins uniques de chaque client. Avec une approche centrée sur l'utilisateur, nous créons des sites web élégants, performants et optimisés pour le référencement. Notre mission est de transformer vos idées en réalité numérique, en vous offrant des solutions innovantes et personnalisées qui propulsent votre présence en ligne. Faites confiance à AJ-WEB pour un service de qualité.
                </p>
            </div>
            
            <!-- Desktop -->

            <div id="desktop" class="mx-4 sm:mx-0 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 sm:gap-0">
                <div class="p-8">
                    <div class="bg-gray-100 p-8">
                        <a href="#competences">
                            <img class="w-full sm:h-1/3 p-2 sm:p-4 filter blur-none transition-all duration-300 ease-in-out hover:blur-sm" src="images/fond1.png" alt="Fond 1">
                        </a>
                    </div>
                </div>
                <div class="p-8">
                    <div class="bg-gray-100 p-8">
                        <a href="#contact">
                            <img class="w-full sm:h-1/3 p-2 sm:p-4 filter blur-none transition-all duration-300 ease-in-out hover:blur-sm" src="images/fond2.png" alt="Portfolio">
                        </a>
                    </div>
                </div>
                <div class="p-8">
                    <div class="bg-gray-100 p-8">
                        <a href="#portfolio">
                            <img class="w-full sm:h-1/3 p-2 sm:p-4 filter blur-none transition-all duration-300 ease-in-out hover:blur-sm" src="images/fond3.png" alt="Contact">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Smartphone -->

        <div id="smartphone" class="filter blur-none transition-all duration-300 ease-in-out hover:blur-sm grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 mt-8">
            <div class="p-2 relative">
                <div class="bg-gray-100 ">
                    <img class="w-full filter blur-none transition-all duration-300 ease-in-out hover:blur-sm" src="images/fondsmart1.png" alt="Fond 1">
                </div>
            </div>
            <div class="p-2 relative">
                <div class="bg-gray-100 ">
                    <img class="w-full filter blur-none transition-all duration-300 ease-in-out hover:blur-sm" src="images/fondsmart2.png" alt="Fond 1">
                </div>
            </div>
            <div class="p-2 relative">
                <div class="bg-gray-100 ">
                    <img class="w-full filter blur-none transition-all duration-300 ease-in-out hover:blur-sm" src="images/fondsmart3.png" alt="Fond 1">
                </div>
            </div>
        </div>



        <!-- Section de compétences -->
        <div id="competences" class="py-16 mx-2 grid grid-cols-1 ">

            <section class="py-16 lg:px-10 bg-gray-50">

                <div id="Left" class=" container mx-auto text-center">
                    <img src="images/competences.png" alt="icone competences" class="mx-auto w-20">
                    <h2 class="inline-block px-4 py-2  text-black rounded-lg text-2xl font-semibold italic underline decoration-2">Compétences</h2>

                    <div class="py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 mt-8">
                        <!-- compétences front -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                            <h3 class="text-lg font-semibold italic">Développement Frontend</h3>
                            <div class="mt-4 flex items-center">

                                <img src="images/html.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar  h-3 w-11/12 bg-green-500 rounded"></div>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center">

                                <img src="images/css.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar  h-3 w-11/12 bg-green-500 rounded"></div>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center">

                                <img src="images/javascript.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar3  h-3 w-11/12 bg-green-500 rounded"></div>
                                </div>
                            </div>


                        </div>
                        <!-- competences back -->
                        <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                            <h3 class="text-lg font-semibold italic">Développement Backend</h3>
                            <div class="mt-8 flex items-center">

                                <img src="images/php.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar2  h-3 w-1/4 bg-blue-500 rounded"></div>
                                </div>
                            </div>
                            <div class="mt-12 flex items-center">

                                <img src="images/laravel.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar2  h-3 w-11/12 bg-blue-500 rounded"></div>
                                </div>
                            </div>
                            <div class="mt-10 flex items-center">

                                <img src="images/sql.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar2  h-3 w-11/12 bg-blue-500 rounded"></div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                            <h3 class="text-lg font-semibold italic">framework Frontend</h3>
                            <p class="italic">TAILWIND</p>
                            <div class="w-full bg-gray-200 rounded">
                                <div class="progress-bar3 mt-2 h-3 w-5/6 bg-green-500 rounded"></div>
                            </div>
                        </div>
                        <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                            <h3 class="text-lg font-semibold italic">CMS</h3>
                            <p class="italic">Wordpress</p>
                            <div class=" w-full bg-gray-200 rounded">
                                <div class="progress-bar3 mt-2 h-3 w-5/6 bg-green-500 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section de portfolio -->
            <section id="portfolio" class="py-16">
                <div class="py-16 bg-gray-50">
                    <div class="container text-center mx-auto">
                        <img src="images/smartportfolio.png" alt="icone web" class="mx-auto w-20">
                        <h2 class="inline-block px-4 py-2  text-black rounded-lg text-2xl font-semibold italic underline decoration-2">Créations web/Portfolio</h2>
                        <!-- projets -->

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8 mt-8">
                            <div class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                                <h3 class="italic font-semibold text-xl mb-4">Votre Projet</h3>
                                <img src="images/votreprojet.png" class="w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                                <p class="italic font-semibold text-lg">Le site Web dont vous avez toujours rêvé</p>
                            </div>
                            <div id="Right2" class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                                <h3 class="italic font-semibold text-xl mb-4">atliee.fr</h3>
                                <a href="https://jeremie.dwwm2324.fr" target="_blank">
                                    <img src="images/sans titre 2.jpg" class="sliders block w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                                    <img src="images/sans titre 4.jpg" class="sliders1 hidden w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                                </a>
                                <p class="italic font-semibold text-lg">site vitrine "Création d' objets de décoration"</p>
                            </div>
                            <div id="Left2" class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                                <h3 class="italic font-semibold text-xl mb-4">leptitfut.fr</h3>
                                <a href="https://jeremie.dwwm2324.fr/LePtitFut" target="_blank">
                                    <img src="images/sans titre 3.jpg" class="sliders2 block w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                                    <img src="images/sans titre 5.jpg" class="sliders3 hidden w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                                    <p class="italic font-semibold text-lg">site vitrine "Bar à bières, vins et spiritueux"</p>
                            </div>
                        </div>
                    </div>


                    <div class=" flex justify-center items-center h-2/3 lg:mx-20 mt-8 rounded-b-lg">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-2xl w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 text-center mb-8">
                            <h3 class="text-lg font-semibold"><a href="https://github.com/Jeremie-AUBREJAT" target="_blank">Github</a></h3>
                            <a href="https://github.com/Jeremie-AUBREJAT" target="_blank">
                                Github
                                <img src="images/github.jpg" class="w-1/4 mx-auto mt-2 rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section de contact -->
            <div class="py-16">
                <div class="container mx-auto text-center">
                    <div><a href="contact.php#contact" class="font-semibold inline-block px-4 py-2 border border-gray-700 text-black bg-gray-400 rounded-xl hover:bg-gray-300 transition duration-300 shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">Contactez-moi</a></div>
                    <p class="mt-4">Prêt à démarrer un projet ensemble ?</p>
                    <!-- Ajoutez ici un formulaire de contact ou vos informations de contact -->
                </div>
            </div>

            <!-- Pied de page -->

            <div id="contact" class="container mx-auto py-16 p-8 bg-gray-100 shadow-md rounded-md">
                <h2 class="text-2xl font-semibold italic mb-4">Contact</h2>
                <form id="contactForm" onsubmit="return validateForm()" class="space-y-4">
                    <div class="flex flex-col">
                        <label for="nom" class="text-m font-medium">Nom :</label>
                        <input type="text" id="nom" name="nom" placeholder="Tapez votre nom" required class="border p-2 rounded-md">
                    </div>

                    <div class="flex flex-col">
                        <label for="prenom" class="text-m font-medium">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Tapez votre prénom" required class="border p-2 rounded-md">
                    </div>

                    <div class="flex flex-col">
                        <label for="email" class="text-m font-medium">Email :</label>
                        <input type="email" id="email" name="email" placeholder="Tapez votre E-mail" required class="border p-2 rounded-md">
                    </div>

                    <div class="flex flex-col">
                        <label for="message" class="text-m font-medium">Message :</label>
                        <textarea id="message" name="message" rows="4" placeholder="Tapez votre message" required class="border p-2 rounded-md"></textarea>
                    </div>

                    <p id="errorMessage" class="error"></p>

                    <button type="submit" class="bg-gray-700 text-white p-2 rounded-md hover:bg-gray-600 transition">Envoyer</button>
                </form>


                <script>
                    function validateForm() {
                        // Récupérer les valeurs des champs
                        var nom = document.getElementById("nom").value;
                        var prenom = document.getElementById("prenom").value;
                        var email = document.getElementById("email").value;
                        var message = document.getElementById("message").value;

                        // Vérifier si les champs sont vides
                        if (nom === "" || prenom === "" || email === "" || message === "") {
                            document.getElementById("errorMessage").innerHTML = "Tous les champs doivent être remplis.";
                            return false;
                        }

                        // Vérifier si l'email est valide
                        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(email)) {
                            document.getElementById("errorMessage").innerHTML = "Veuillez saisir une adresse e-mail valide.";
                            return false;
                        }

                        // Réinitialiser le message d'erreur
                        document.getElementById("errorMessage").innerHTML = "";

                        // Vous pouvez ajouter ici le code pour envoyer le formulaire par e-mail (côté serveur)

                        // Empêcher le formulaire de se soumettre normalement
                        return false;
                    }
                </script>
            </div>

          
        </div>
    </div>
    <div class="fixed bottom-0 right-0 mb-4">
        <button class="scroll-to-top-button mr-2 mb-2">
            <img src="images/fleche.png" alt="bouton-haut-de-page" class="rounded-2xl">
        </button>
    </div>
    <!-- navbar smartphone -->
    <div id="navsmart" class="hidden">
        <nav class="fixed bottom-0 w-full z-30 bg-gradient-to-r from-gray-700 to-gray-900 p-4 flex justify-between ">
            <a href="#competences" class="underline decoration-1 text-gray-200 italic text-xl p-2">Services</a>
            <a href="#portfolio" class="underline decoration-1 text-gray-200 italic text-xl p-2">Créations web</a>
            <a href="#contact" class="underline decoration-1 text-gray-200 italic text-xl p-2">Contact</a>
           
        </nav>
    </div>
    <script>
        function updateNavVisibility() {
            var navsmart = document.getElementById("navsmart");
            var desknav = document.getElementById("desknav");
            if (window.matchMedia("(orientation: portrait)").matches) {
                navsmart.classList.remove("hidden");
                desknav.classList.add("hidden"); // Ajout de la classe hidden pour cacher l'élément desknav
            } else {
                navsmart.classList.add("hidden");
                desknav.classList.remove("hidden"); // Suppression de la classe hidden pour afficher l'élément desknav
            }
        }

        window.addEventListener("resize", function() {
            updateNavVisibility();
        });

        // Appeler la fonction une première fois pour définir la visibilité initiale
        updateNavVisibility();
    </script>


</body>
@endsection