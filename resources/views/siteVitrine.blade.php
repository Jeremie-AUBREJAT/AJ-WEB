@extends('layouts.appsecond')
@section('title', 'Nos services site-vitrine')

@section('meta-description', 'Découvrez nos services de création de sites vitrines : design moderne et élégant, responsive, optimisation SEO, accessibilité et conformité RGPD. Profitez de maintenance sans abonnement, propriété totale de votre site, et des tarifs clairs et transparents.')
@section('content')
    <!-- all-reviews.blade.php -->
    <section class="container mx-auto px-4 py-16 bg-gray-50 mt-8 section-background">
        <div class="flex justify-center items-center space-x-4">
            <!-- Premier SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                style="fill: #ffffff; stroke: #000000; stroke-width: 0.5px;">
                <path
                    d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z">
                </path>
            </svg>
            <!-- Deuxième SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                class="fill-current text-white ml-4 mr-2" style="fill: #ffffff; stroke: #000000; stroke-width: 0.6px;">
                <path d="m19 12-7-6v5H6v2h6v5z" />
            </svg>
            <!-- Troisième SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                style="fill: #ffffff;transform: ;msFilter:; stroke: #000000; stroke-width: 0.4px;">
                <path
                    d="M20 3H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h7v2H8v2h8v-2h-3v-2h7c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 14V5h16l.002 9H4z">
                </path>
            </svg>
        </div>
        <h1 class="text-xl lg:text-3xl font-bold mt-4 mx-auto text-white text-center text-shadow-custom">SITE VITRINE</h1>
    </section>
    <div class="container mx-auto px-4 py-16 bg-gray-50">
        <div class="text-center mb-8">
            <p class="text-gray-700 text-lg my-12 mx-12">
                Présentez votre entreprise de manière élégante et professionnelle avec nos sites vitrines sur mesure, conçus
                pour mettre en valeur vos services et captiver vos visiteurs.
            </p>
            <div class="image-container">
                <img src="/images/screenshot.jpg" alt="Exemple de site vitrine"
                    class="scrolling-image mx-auto h-80  rounded-lg">
            </div>
        </div>
        <div class="my-12 lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>
        <section id="services" class="container mx-auto px-4 py-16">
            {{-- <div class="my-12 lg:my-24 border-t-4 border-sky-700"></div> --}}
            <h2 class="text-3xl md:text-4xl font-bold text-sky-700 mb-8 text-center">Nos Services de Création de Sites
                Vitrines</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                        viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;">
                        <path
                            d="M20 3H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h7v2H8v2h8v-2h-3v-2h7c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM4 14V5h16l.002 9H4z">
                        </path>
                    </svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Design Moderne et Élégant</h3>
                    <p class="text-lg text-gray-700">
                        Nous concevons des sites vitrines avec un <strong>design moderne et élégant</strong> pour refléter
                        l’image de votre entreprise et attirer vos visiteurs.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                        viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;">
                        <path
                            d="M20 3H7c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h6c1.103 0 2-.897 2-2h8c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM6 9h4l-.003 9H4V9h2zm6 8V9c0-1.103-.897-2-2-2H7V5h11v12h-6z">
                        </path>
                    </svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Responsive Design/Optimisation</h3>
                    <p class="text-lg text-gray-700">
                        Tous nos sites sont conçus pour être entièrement <strong>responsive</strong>, garantissant une
                        expérience utilisateur fluide sur tous les appareils.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                        viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;">
                        <path
                            d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                        </path>
                    </svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Optimisation SEO</h3>
                    <p class="text-lg text-gray-700">
                        Chaque site est optimisé pour les moteurs de recherche afin de garantir une meilleure visibilité et
                        un <strong>meilleur référencement</strong>.
                    </p>
                </div>
                <!-- Service 4 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <div class="flex justify-center space-x-4 mb-4">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                            viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;">
                            <circle cx="18" cy="4" r="2"></circle>
                            <path
                                d="m17.836 12.014-4.345.725 3.29-4.113a1 1 0 0 0-.227-1.457l-6-4a.999.999 0 0 0-1.262.125l-4 4 1.414 1.414 3.42-3.42 2.584 1.723-2.681 3.352a5.913 5.913 0 0 0-5.5.752l1.451 1.451A3.972 3.972 0 0 1 8 12c2.206 0 4 1.794 4 4 0 .739-.216 1.425-.566 2.02l1.451 1.451A5.961 5.961 0 0 0 14 16c0-.445-.053-.878-.145-1.295L17 14.181V20h2v-7a.998.998 0 0 0-1.164-.986zM8 20c-2.206 0-4-1.794-4-4 0-.739.216-1.425.566-2.02l-1.451-1.451A5.961 5.961 0 0 0 2 16c0 3.309 2.691 6 6 6 1.294 0 2.49-.416 3.471-1.115l-1.451-1.451A3.972 3.972 0 0 1 8 20z">
                            </path>
                        </svg>
                        <div class="text-xl text-sky-700">/</div>
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                            viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;">
                            <path
                                d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z">
                            </path>
                        </svg>
                    </div>

                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Accessibilité et RGPD</h3>
                    <p class="text-lg text-gray-700">
                        Nous nous assurons que votre site est conforme aux normes d'<strong>accessibilité</strong> et au
                        <strong>RGPD</strong> pour une utilisation optimale et sécurisée.
                    </p>
                </div>
                <!-- Service 5 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#0369a1"
                        class="w-12 h-12 mx-auto mb-4">
                        <path fill-rule="evenodd"
                            d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                            clip-rule="evenodd" />
                    </svg>

                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Maintenance Sans Abonnement</h3>
                    <p class="text-lg text-gray-700">
                        Nous offrons des services de <strong>maintenance sans abonnement</strong> pour garantir la pérennité
                        et le bon fonctionnement de votre site.
                    </p>
                </div>
                <!-- Service 6 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                        viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;">
                        <path
                            d="M3.433 17.325 3.079 19.8a1 1 0 0 0 1.131 1.131l2.475-.354C7.06 20.524 8 18 8 18s.472.405.665.466c.412.13.813-.274.948-.684L10 16.01s.577.292.786.335c.266.055.524-.109.707-.293a.988.988 0 0 0 .241-.391L12 14.01s.675.187.906.214c.263.03.519-.104.707-.293l1.138-1.137a5.502 5.502 0 0 0 5.581-1.338 5.507 5.507 0 0 0 0-7.778 5.507 5.507 0 0 0-7.778 0 5.5 5.5 0 0 0-1.338 5.581l-7.501 7.5a.994.994 0 0 0-.282.566zM18.504 5.506a2.919 2.919 0 0 1 0 4.122l-4.122-4.122a2.919 2.919 0 0 1 4.122 0z">
                        </path>
                    </svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Propriété Totale</h3>
                    <p class="text-lg text-gray-700">
                        Vous bénéficiez de la <strong>pleine propriété de votre site</strong>, avec tous les droits pour
                        gérer et modifier votre contenu comme vous le souhaitez.
                    </p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section id="contact" class="bg-sky-800 text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Prêt à lancer votre site vitrine ?</h2>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Package de Base</h3>
                    <p class="text-lg text-gray-700 mb-4">À partir de <strong>800 €</strong></p>
                    <p class="text-gray-700 mb-4">Inclut : Design moderne, Responsive, et SEO de base.</p>
                    {{-- <a href="mailto:contact@votreentreprise.com" class="bg-sky-700 text-white hover:bg-sky-800 font-semibold py-3 px-6 rounded-lg shadow-md">Demandez un devis</a> --}}
                </div>
                <p class="text-lg md:text-xl my-6">Contactez-nous dès aujourd'hui pour discuter de votre projet et obtenir
                    un devis personnalisé.</p>
                <a href="/contact"
                    class="bg-white text-sky-700 hover:bg-gray-200 font-semibold py-3 px-6 rounded-lg shadow-md">Contactez-nous</a>
                <p class="text-lg md:text-xl my-6">Vous désirez un site E-commerce? Visitez les services <strong
                        class="text-2xl">E-commerce</strong>.</p>
                <a href="/site-Ecommerce"
                    class="bg-white text-sky-700 hover:bg-gray-200 font-semibold py-3 px-6 rounded-lg shadow-md">E-commerce</a>
            </div>


        </section>
    </div>
    @endsection
