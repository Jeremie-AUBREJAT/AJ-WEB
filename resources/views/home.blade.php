@extends('layouts.appfirst')

@section('content')

    <body class="bg-gradient-to-r from-gray-900 to-gray-700">


        <div id="content-inner">
            <div class="mx-2 bg-gray-100 grid grid-cols-1 rounded-sm">
                <section class="flex flex-col lg:flex-row justify-center items-center py-12 bg-gray-100">
                    <!-- Contenu Textuel -->
                    <div class="w-full lg:w-1/2 px-6 md:px-12 text-center lg:text-left">
                        <h1 class="text-3xl md:text-5xl lg:text-5xl font-bold text-gray-800 mb-4">
                            <span class="text-sky-700">AJ-WEB</span> CONCEPTION ET DEVELOPPEMENT DE SITE INTERNET DANS LE
                            CHER
                        </h1>

                        <p class="text-lg md:text-xl font-medium text-gray-700 leading-relaxed">
                            Chez <strong class="text-sky-700">AJ-WEB</strong>, situé à <strong>Savigny-en-Sancerre</strong>
                            dans le
                            département du Cher, nous offrons des services de <strong>développement web sur mesure</strong>.
                            Nous nous
                            engageons à créer des <strong>sites web modernes</strong> qui répondent aux <strong>besoins
                                spécifiques</strong>
                            de chaque client, avec une <strong>approche centrée sur l'utilisateur</strong>.
                        </p>

                        <p class="text-lg md:text-xl font-medium text-gray-700 leading-relaxed mt-4">
                            Tous nos projets sont <strong>optimisés pour le référencement</strong> et conçus en respectant
                            les normes d'<strong>accessibilité</strong>.
                            De plus, nous veillons à ce que vos sites soient entièrement <strong>responsive</strong>,
                            garantissant ainsi
                            une expérience utilisateur fluide sur tous les appareils, qu'il s'agisse de
                            <strong>mobiles</strong>, de
                            <strong>tablettes</strong> ou d'<strong>ordinateurs</strong>. Faites confiance à <strong
                                class="text-sky-700">AJ-WEB</strong>
                            pour un <strong>service de qualité</strong>, axé sur la <strong>satisfaction de vos
                                besoins</strong> et la réussite de vos projets numériques.
                        </p>
                        <a href="/à-propos"
                            class="inline-block bg-sky-700 text-white py-2 px-4 mt-4 rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110">
                            En détail
                        </a>
                    </div>

                    <!-- Image -->
                    <div class="w-1/3 lg:w-1/2 flex justify-center lg:justify-end mt-10 lg:mt-0">
                        <img src="images/th.webp" alt="Description de l'image"
                            class="w-full max-w-md h-auto object-cover mx-auto rounded-full">
                    </div>
                </section>


                <!-- Section services Desktop -->
                <div id="services">
                    <div class="my-12 lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>
                    <div id="desktop"
                        class="mx-4 sm:mx-0 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 sm:gap-0">
                        <div class="col-span-full text-center mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-16 h-16 mx-auto mb-4 text-sky-700">
                                <path fill-rule="evenodd"
                                    d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
                                <path fill-rule="evenodd"
                                    d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <!-- Services Spécifiques -->
                            <div class="mx-4 sm:mx-0 text-center mb-8">
                                <h2 class="text-3xl md:text-4xl font-bold text-sky-700 mb-4">Nos Services Spécifiques</h2>
                                <p class="text-lg md:text-xl text-gray-700 mb-6">
                                    Nous vous proposons des services adaptés à vos besoins :
                                </p>
                                <div class="flex flex-col md:flex-row justify-center gap-8 mt-12">
                                    <!-- Service 1 -->
                                    <div
                                        class="p-4 md:w-1/3 border-l border-gray-200 md:border-l-2 md:border-r-0 last:border-r-0">
                                        <h3 class="text-2xl font-semibold text-sky-700 mb-2">Création de Sites Vitrines</h3>
                                        <p class="text-lg text-gray-700">
                                            Des sites élégants et informatifs pour présenter votre activité en ligne,
                                            optimisés pour une navigation fluide et efficace.
                                        </p>
                                        <a href="/site-vitrine"
                                        class="inline-block mt-4 bg-sky-700 text-white font-semibold py-2 px-4 rounded-lg hover:bg-sky-800 transition duration-300">
                                        En savoir plus
                                    </a>
                                    </div>
                                    <!-- Service 2 -->
                                    <div class="p-4 md:w-1/3 border-l border-sky-700 md:border-l-2 last:border-r-0">
                                        <h3 class="text-2xl font-semibold text-sky-700 mb-2">Développement Personnalisé</h3>
                                        <p class="text-lg text-gray-700">
                                            Que vous préfériez WordPress pour sa flexibilité ou des solutions de
                                            développement entièrement personnalisées, nous avons la compétence pour répondre
                                            à vos attentes.
                                        </p>
                                    </div>
                                    <!-- Service 3 -->
                                    <div class="p-4 md:w-1/3 border-l border-sky-700 md:border-l-2 last:border-r-0">
                                        <h3 class="text-2xl font-semibold text-sky-700 mb-2">Création de Petits
                                            E-commerce</h3>
                                        <p class="text-lg text-gray-700">
                                            Des solutions e-commerce sur mesure pour gérer vos ventes en ligne avec
                                            efficacité, adaptées à vos besoins spécifiques.
                                        </p>
                                        <a href="/site-Ecommerce"
                                        class="inline-block mt-4 bg-sky-700 text-white font-semibold py-2 px-4 rounded-lg hover:bg-sky-800 transition duration-300">
                                        En savoir plus
                                    </a>
                                    </div>
                                </div>
                                <p class="text-lg md:text-xl text-gray-700 mt-12">
                                    Nous proposons également des services de maintenance <strong>sans abonnement</strong>,
                                    et vous bénéficiez
                                    de la <strong>pleine propriété de votre site</strong>.
                                </p>
                                <div class="my-2 border-t-4 border-orange-400 mx-60"></div>
                            </div>


                        </div>
                        <!-- Service 1 -->
                        <div class="p-8">
                            <div class="relative rounded-lg overflow-hidden p-4">
                                <div class="relative block group">
                                    <img class="w-full sm:h-1/3 p-2 sm:p-4 filter blur-none transition-all duration-500 ease-in-out rounded-bl-full group-hover:opacity-70"
                                        src="images/fond1.webp" alt="Fonctionnalités sur Mesure">
                                    <div
                                        class="absolute inset-0 bg-sky-800 opacity-50 transition-opacity duration-500 ease-in-out group-hover:opacity-90 rounded-bl-full m-4">
                                    </div>
                                    <div
                                        class="absolute top-0 left-0 right-0 p-6 flex flex-col justify-start items-start text-white">
                                        <h2 class="text-xl font-semibold mb-2 p-4 mx-auto">Fonctionnalités sur Mesure</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            style="fill: #ffffff; display: block; margin: auto;" class="size-8">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-lg text-center p-4 font-semibold">
                                            Nous créons des <strong>sites web personnalisés</strong> et sur mesure pour
                                            répondre
                                            à vos <strong>besoins uniques</strong>, avec une attention particulière aux
                                            détails et une approche
                                            <strong>axée sur l'utilisateur</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Service 2 -->
                        <div class="p-8">
                            <div class="relative rounded-lg overflow-hidden p-4">
                                <div class="relative block group">
                                    <img class="w-full sm:h-1/3 p-2 sm:p-4 filter blur-none transition-all duration-500 ease-in-out group-hover:opacity-70"
                                        src="images/fond2.webp" alt="SEO et Performance Web">
                                    <div
                                        class="absolute inset-0 bg-sky-800 opacity-80 transition-opacity duration-500 ease-in-out group-hover:opacity-95 m-4">
                                    </div>
                                    <div
                                        class="absolute top-0 left-0 right-0 p-6 flex flex-col justify-start items-start text-white">
                                        <h2 class="text-xl font-semibold mb-2 p-4 mx-auto">SEO et Performance Web</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            style="fill: #ffffff; display: block; margin: auto;" class="size-8">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-lg text-center p-4 font-semibold">
                                            Nous garantissons des <strong>performances exceptionnelles</strong> pour vos
                                            sites
                                            web, avec des temps de chargement rapides et une expérience utilisateur fluide
                                            sur
                                            tous les appareils. En optimisant les aspects techniques et le contenu, nous
                                            nous assurons que votre
                                            site est non seulement rapide, mais aussi <strong>optimisé pour les moteurs de
                                                recherche</strong>.
                                            Profitez d'un <strong>référencement naturel amélioré</strong> et d'une meilleure
                                            visibilité en ligne grâce à nos solutions sur mesure qui répondent aux
                                            meilleures pratiques du <strong>SEO</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Service 3 -->
                        <div class="p-8">
                            <div class="relative rounded-lg overflow-hidden p-4">
                                <div class="relative block group">
                                    <img class="w-full sm:h-1/3 p-2 sm:p-4 filter blur-none transition-all duration-500 ease-in-out rounded-br-full group-hover:opacity-70"
                                        src="images/fond3.webp" alt="Sites Web Responsive">
                                    <div
                                        class="absolute inset-0 bg-sky-800 opacity-50 transition-opacity duration-500 ease-in-out group-hover:opacity-90 rounded-br-full m-4">
                                    </div>
                                    <div
                                        class="absolute top-0 left-0 right-0 p-6 flex flex-col justify-start items-start text-white">
                                        <h2 class="text-xl font-semibold mb-2 p-4 mx-auto">Sites Web Responsive</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            style="fill: #ffffff; display: block; margin: auto;" class="size-8">
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-lg text-center p-4 font-semibold">
                                            Nous concevons des sites web entièrement <strong>responsive</strong>,
                                            garantissant une <strong>expérience utilisateur fluide</strong>
                                            et <strong>cohérente</strong> sur tous les types d'appareils, y compris les
                                            <strong>mobiles</strong>, <strong>tablettes</strong> et
                                            <strong>ordinateurs</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
                <!-- Smartphone -->

                <div id="smartphone" class="hidden grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 mt-8">
                    <div
                        class="mx-4 sm:mx-0 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 sm:gap-0">
                        <div class="col-span-full text-center mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-16 h-16 mx-auto mb-4 text-sky-700">
                                <path fill-rule="evenodd"
                                    d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
                                <path fill-rule="evenodd"
                                    d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="mx-4 sm:mx-0 text-center mb-8">
                                <h2 class="text-3xl md:text-4xl font-bold text-sky-700 mb-4">Nos Services Spécifiques</h2>
                                <p class="text-lg md:text-xl text-gray-700 mb-6">
                                    Nous vous proposons des services adaptés à vos besoins.
                                </p>
                                <div class="flex flex-col md:flex-row justify-center gap-8 mt-12">
                                    <!-- Service 1 -->
                                    <div class="p-4 md:w-1/3 border-t border-sky-700 md:border-t-2 last:border-b-0">
                                        <h3 class="text-2xl font-semibold text-sky-700 mb-2">Création de Sites Vitrines
                                        </h3>
                                        <p class="text-lg text-gray-700">
                                            Des sites élégants et informatifs pour présenter votre activité en ligne,
                                            optimisés pour une navigation fluide et efficace.
                                        </p>
                                        <a href="/site-vitrine"
                                        class="inline-block mt-4 md:mt-12 bg-sky-700 text-white font-semibold py-2 px-4 rounded-lg hover:bg-sky-800 transition duration-300">
                                        En savoir plus
                                    </a>
                                    </div>
                                    <!-- Service 2 -->
                                    <div class="p-4 md:w-1/3 border-t border-sky-700 md:border-t-2 last:border-b-0">
                                        <h3 class="text-2xl font-semibold text-sky-700 mb-2">Développement Personnalisé
                                        </h3>
                                        <p class="text-lg text-gray-700">
                                            Que vous préfériez WordPress pour sa flexibilité ou des solutions de
                                            développement entièrement personnalisées, nous avons la compétence pour répondre
                                            à vos attentes.
                                        </p>
                                    </div>
                                    <!-- Service 3 -->
                                    <div class="p-4 md:w-1/3 border-t border-sky-700 md:border-t-2 last:border-b-0">
                                        <h3 class="text-2xl font-semibold text-sky-700 mb-2">Création de Petits
                                            E-commerce</h3>
                                        <p class="text-lg text-gray-700">
                                            Des solutions e-commerce sur mesure pour gérer vos ventes en ligne avec
                                            efficacité, adaptées à vos besoins spécifiques.
                                        </p>
                                        <a href="/site-Ecommerce"
                                        class="inline-block mt-4 bg-sky-700 text-white font-semibold py-2 px-4 rounded-lg hover:bg-sky-800 transition duration-300">
                                        En savoir plus
                                    </a>
                                    </div>
                                </div>
                                <p class="text-lg md:text-xl text-gray-700 mt-12">
                                    Nous proposons également des services de maintenance sans abonnement, et vous bénéficiez
                                    de la pleine propriété de votre site.
                                </p>
                                <div class="my-2 border-t-4 border-orange-400 mx-60"></div>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 relative container mx-auto" data-target="p1">

                        <div class="relative">
                            <div class="absolute inset-0 bg-sky-800 opacity-50 z-10"></div>
                            <img class="w-full z-0" src="images/fondsmart1.webp" alt="image représentant le haut d'un ordinateur portable">
                            <div class="absolute top-0 left-0 right-0 flex flex-col items-center text-white z-20">
                                <h2 class="text-xl font-semibold mb-2 text-shadow-custom">Fonctionnalités sur Mesure</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: #ffffff;stroke: #000000; stroke-width: 0.5px"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p id="p1" class="text-lg text-center p-8 font-semibold hidden bg-sky-700 text-white">
                            Nous créons des <strong>sites web personnalisés</strong> et sur mesure pour répondre
                            à vos <strong>besoins uniques</strong>,
                            avec une attention particulière aux détails et une approche
                            <strong>axée sur l'utilisateur</strong>.
                        </p>
                    </div>

                    <div class="p-2 relative container mx-auto" data-target="p2">
                        <div class="relative">
                            <div class="absolute inset-0 bg-sky-800 opacity-50 z-10"></div>
                            <img class="w-full z-0" src="images/fondsmart2.webp" alt="image représentant le milieu d'un ordinateur portable">
                            <div class="absolute top-0 left-0 right-0 flex flex-col items-center text-white z-20">
                                <h2 class="text-xl text-shadow-custom font-bold mb-2">SEO et Performance Web</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: #ffffff;stroke: #000000; stroke-width: 0.5px"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p id="p2" class="text-lg text-center p-8 font-semibold hidden bg-sky-700 text-white">
                            Nous garantissons des <strong>performances exceptionnelles</strong> pour vos sites
                            web,
                            avec des temps de chargement rapides et une expérience utilisateur fluide sur tous
                            les appareils.
                            En optimisant les aspects techniques et le contenu, nous nous assurons que votre
                            site est non seulement rapide,
                            mais aussi <strong>optimisé pour les moteurs de recherche</strong>.
                            Profitez d'un <strong>référencement naturel amélioré</strong> et d'une meilleure
                            visibilité en ligne grâce à nos solutions sur mesure
                            qui répondent aux meilleures pratiques du <strong>SEO</strong>.
                        </p>
                    </div>

                    <div class="p-2 relative container mx-auto" data-target="p3">
                        <div class="relative">
                            <div class="absolute inset-0 bg-sky-800 opacity-50 z-10"></div>
                            <img class="w-full z-0" src="images/fondsmart3.webp" alt="image représentant le bas d'un ordinateur portable">
                            <div class="absolute top-0 left-0 right-0  flex flex-col items-center text-white z-20">
                                <h2 class="text-xl font-semibold mb-2 text-shadow-custom">Créations de Petits E-commerce</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: #ffffff;stroke: #000000; stroke-width: 0.5px"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p id="p3" class="text-lg text-center p-8 font-semibold hidden bg-sky-700 text-white">
                            Nous concevons des sites web entièrement <strong>responsive</strong>, garantissant
                            une <strong>expérience utilisateur fluide</strong>
                            et <strong>cohérente</strong> sur tous les types d'appareils, y compris les
                            <strong>mobiles</strong>, <strong>tablettes</strong> et
                            <strong>ordinateurs</strong>.
                        </p>
                    </div>
                </div>
                <div class="my-8">
                    <div class="container mx-auto text-center">
                        <p class="mb-4 text-gray-700 text-xl font-semibold">Vous souhaitez obtenir un devis ou
                            des informations supplémentaires ?</p>
                        <div>
                            <a href="/contact"
                                class="inline-block bg-sky-700 text-white py-2 px-4 rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110">
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>


                <!-- Section de compétences -->


                <div id="competences" class="lg:py-16 mx-2 grid grid-cols-1 bg-gray-100 ">

                    <section class="py-16 lg:px-10 bg-gray-100">
                        <div id="Left" class=" container mx-auto text-center">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#0369a1"
                                class="mx-auto block w-16 h-16 mb-4">
                                <path fill-rule="evenodd"
                                    d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 0 0-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 0 0-2.282.819l-.922 1.597a1.875 1.875 0 0 0 .432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 0 0 0 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 0 0-.432 2.385l.922 1.597a1.875 1.875 0 0 0 2.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 0 0 2.28-.819l.923-1.597a1.875 1.875 0 0 0-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 0 0 0-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 0 0-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 0 0-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 0 0-1.85-1.567h-1.843ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h2 class="text-3xl md:text-4xl font-bold text-sky-700 mb-4">
                                COMPÉTENCES</h2>
                            <p class="text-lg md:text-xl text-gray-700">Explorez notre expertise technique et
                                découvrez
                                comment nos compétences peuvent répondre à vos besoins spécifiques. Chaque
                                compétence est
                                représentée par une icône pour une compréhension rapide.</p>
                            <div class="py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 mt-8">
                                <!-- compétences front -->
                                <div class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                                    <h3 class="text-lg font-semibold italic">DÉVELOPPEMENT FRONTEND</h3>
                                    <div class="mt-4 flex items-center">

                                        <img src="images/html.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                        <div class="w-full h-3 bg-gray-200 rounded">
                                            <div class="progress-bar  h-3 w-11/12 bg-green-500 rounded"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex items-center">

                                        <img src="images/css.png" alt="icone css" class="mr-4 w-7 sm:w-10">
                                        <div class="w-full h-3 bg-gray-200 rounded">
                                            <div class="progress-bar  h-3 w-11/12 bg-green-500 rounded"></div>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex items-center">

                                        <img src="images/javascript.png" alt="icone javascript" class="mr-4 w-7 sm:w-10">
                                        <div class="w-full h-3 bg-gray-200 rounded">
                                            <div class="progress-bar3  h-3 w-11/12 bg-green-500 rounded"></div>
                                        </div>
                                    </div>


                                </div>
                                <!-- competences back -->
                                <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                                    <h3 class="text-lg font-semibold italic">DÉVELOPPEMENT BACKEND</h3>
                                    <div class="mt-8 flex items-center">

                                        <img src="images/php.png" alt="icone php" class="mr-4 w-7 sm:w-10">
                                        <div class="w-full h-3 bg-gray-200 rounded">
                                            <div class="progress-bar2  h-3 w-1/4 bg-blue-500 rounded"></div>
                                        </div>
                                    </div>
                                    <div class="mt-12 flex items-center">

                                        <img src="images/laravel.png" alt="icone laravel" class="mr-4 w-7 sm:w-10">
                                        <div class="w-full h-3 bg-gray-200 rounded">
                                            <div class="progress-bar2  h-3 w-11/12 bg-blue-500 rounded"></div>
                                        </div>
                                    </div>
                                    <div class="mt-10 flex items-center">

                                        <img src="images/sql.png" alt="icone sql" class="mr-4 w-7 sm:w-10">
                                        <div class="w-full h-3 bg-gray-200 rounded">
                                            <div class="progress-bar2  h-3 w-11/12 bg-blue-500 rounded"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                                    <h3 class="text-lg font-semibold italic">RÉFÉRENCEMENT</h3>
                                    <p class="italic">SEO</p>
                                    <div class="w-full bg-gray-200 rounded">
                                        <div class="progress-bar3 mt-2 h-3 w-5/6 bg-green-500 rounded"></div>
                                    </div>
                                </div>
                                <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                                    <h3 class="text-lg font-semibold italic">CMS</h3>
                                    <p class="italic">WORDPRESS</p>
                                    <div class=" w-full bg-gray-200 rounded">
                                        <div class="progress-bar3 mt-2 h-3 w-5/6 bg-green-500 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div id="creations">
                        <div class="my-12 lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>
                        {{-- section sites web --}}
                        <section class="container mx-auto px-4 py-8 bg-gray-100 mt-8">
                            <div class="container text-center mx-auto mb-8">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    width="60" height="60" style="display: block; margin: auto; fill: #0369a1;">
                                    <path
                                        d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                                </svg>
                                <h2 class="text-3xl md:text-4xl font-bold text-sky-700 my-8">
                                    CRÉATIONS WEB
                                </h2>
                                <p class="text-lg md:text-xl text-gray-700 my-8">
                                    Explorez notre expertise en création de sites web, qu'il s'agisse de vitrines
                                    professionnelles, de petites boutiques en ligne, ou de solutions personnalisées.
                                    Profitez d’une création sur mesure, sans abonnement, avec la garantie de la
                                    pleine propriété de votre site.
                                </p>


                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-16">
                                @foreach ($websites as $website)
                                    <div class="relative overflow-hidden rounded-lg card" data-url="{{ $website->url }}">
                                        <!-- Image -->
                                        <div class="relative transition duration-300 transform hover:scale-105">
                                            <img src="{{ asset($website->pictures->first()->path) }}"
                                                class="w-full h-60 object-cover rounded-lg"
                                                alt="Image for {{ $website->name }}" />

                                            <!-- Title Overlay -->
                                            <div
                                                class="absolute inset-x-0 top-0 bg-white bg-opacity-80 p-4 text-center title-overlay">
                                                <h3 class="text-blue-950 text-2xl font-bold">{{ $website->name }}
                                                </h3>
                                            </div>

                                            <!-- Button SVG -->
                                            <a href="{{ $website->url }}" target="_blank" rel="noopener noreferrer"
                                                class="absolute bottom-4 left-1/2 transform -translate-x-1/2 inline-flex items-center justify-center w-12 h-12 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" class="fill-white">
                                                    <path
                                                        d="M8.465 11.293c1.133-1.133 3.109-1.133 4.242 0l.707.707 1.414-1.414-.707-.707c-.943-.944-2.199-1.465-3.535-1.465s-2.592.521-3.535 1.465L4.929 12a5.008 5.008 0 0 0 0 7.071 4.983 4.983 0 0 0 3.535 1.462A4.982 4.982 0 0 0 12 19.071l.707-.707-1.414-1.414-.707.707a3.007 3.007 0 0 1-4.243 0 3.005 3.005 0 0 1 0-4.243l2.122-2.121z">
                                                    </path>
                                                    <path
                                                        d="m12 4.929-.707.707 1.414 1.414.707-.707a3.007 3.007 0 0 1 4.243 0 3.005 3.005 0 0 1 0 4.243l-2.122 2.121c-1.133 1.133-3.109 1.133-4.242 0L10.586 12l-1.414 1.414.707.707c.943.944 2.199 1.465 3.535 1.465s2.592-.521 3.535-1.465L19.071 12a5.008 5.008 0 0 0 0-7.071 5.006 5.006 0 0 0-7.071 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                        <!-- Description -->
                                        <div class="p-4">
                                            <p class="text-gray-700 text-center">{{ $website->category }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Bouton pour voir tous les sites web -->
                            <div class="text-center my-8">
                                <a href="/créations-web"
                                    class="inline-block bg-sky-700 text-white py-2 px-4 rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110">
                                    Toutes les Créations
                                </a>
                            </div>
                        </section>
                        <div class="my-12 lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>
                    </div>
                    <!-- Section de contact -->
                    <div class="my-8">
                        <div class="container mx-auto text-center">
                            <p class="mb-4 text-gray-700 text-xl font-semibold">Vous souhaitez obtenir un devis ou
                                des informations supplémentaires ?</p>
                            <div>
                                <a href="/contact"
                                    class="inline-block bg-sky-700 text-white py-2 px-4 rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110">
                                    Contactez-nous
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Pied de page -->
                    {{-- section pour les avis --}}
                    <!-- home.blade.php -->
                    <div class="my-12 lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>
                    <section class="container mx-auto px-4 py-8 bg-white">
                        <h1 class="text-2xl font-bold mb-6 ml-12 text-sky-700">Avis Clients les plus récents</h1>

                        <!-- Bouton pour accéder au formulaire d'avis -->
                        <div class="mb-6 ml-12">
                            <a href="/avis/créer"
                                class="inline-block bg-sky-700 text-white py-2 px-4 rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110">
                                Laisser un avis
                            </a>
                        </div>

                        <!-- Carousel Container -->
                        <div class="relative">
                            <div id="carousel" class="overflow-hidden mx-0 lg:mx-8">
                                <div id="carouselSlides" class="flex transition-transform duration-500 ease-in-out">
                                    <!-- Les avis seront injectés ici par JavaScript -->
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <button id="prevBtn"
                                class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-sky-700 text-white px-4 py-2 rounded-lg shadow hover:bg-sky-900">
                                &#10094;
                            </button>
                            <button id="nextBtn"
                                class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-sky-700 text-white px-4 py-2 rounded-lg shadow hover:bg-sky-900">
                                &#10095;
                            </button>
                        </div>

                        <!-- Button to view all reviews -->
                        <div class="text-center mt-12">
                            <a href="/tous-les-avis"
                                class="inline-block bg-sky-700 text-white py-2 px-4 rounded-md hover:bg-sky-900 transition duration-300 transform hover:scale-110">
                                Voir tous les avis
                            </a>
                        </div>
                    </section>

                    <!-- Passer les avis au JavaScript via un attribut data -->
                    <script>
                        window.reviewsData = @json($reviews);
                    </script>
                </div>
            </div>
        </div>
        
    </body>
@endsection
