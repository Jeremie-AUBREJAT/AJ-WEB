@extends('layouts.appsecond')
@section('title', 'Nos services site-Ecommerce')

@section('meta-description', "Découvrez nos services de création de sites e-commerce : boutique en ligne moderne, paiements sécurisés, optimisation SEO e-commerce, gestion de catalogue, promotions et réductions, et responsive design. Tarifs transparents pour une solution complète et adaptée à vos besoins.")
@section('content')
    <!-- e-commerce.blade.php -->
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
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: #ffffff; stroke: #000000; stroke-width: 0.4px;"><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle><path d="M21 7H7.334L6.18 4.23A1.995 1.995 0 0 0 4.333 3H2v2h2.334l4.743 11.385c.155.372.52.615.923.615h8c.417 0 .79-.259.937-.648l3-8A1.003 1.003 0 0 0 21 7zm-7 8-3-3h2V9h2v3h2l-3 3z"></path></svg>
        </div>
        <h1 class="text-xl lg:text-3xl font-bold mt-4 mx-auto text-white text-center text-shadow-custom">E-COMMERCE</h1>
    </section>
    <div class="container mx-auto px-4 py-16 bg-gray-50">
        <div class="text-center mb-8">
            <p class="text-gray-700 text-lg my-12 mx-12">
                Faites passer votre entreprise au niveau supérieur avec notre solution E-commerce complète, conçue pour offrir une expérience de vente en ligne fluide et efficace.
            </p>
            <div class="image-container">
                <img src="/images/site-ecommerce.webp" alt="Exemple de site e-commerce" class="scrolling-image mx-auto h-80  rounded-lg">
            </div>
        </div>
        <div class="my-12 lg:my-24 border-t-4 border-sky-700 lg:mx-40"></div>
        <section id="services" class="container mx-auto px-4 py-16">
            <h2 class="text-3xl md:text-4xl font-bold text-sky-700 mb-8 text-center">Nos Services de Création de Sites E-Commerce</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;"><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle><path d="M21 7H7.334L6.18 4.23A1.995 1.995 0 0 0 4.333 3H2v2h2.334l4.743 11.385c.155.372.52.615.923.615h8c.417 0 .79-.259.937-.648l3-8A1.003 1.003 0 0 0 21 7zm-7 8-3-3h2V9h2v3h2l-3 3z"></path></svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Boutique en Ligne Moderne</h3>
                    <p class="text-lg text-gray-700">
                        Nous créons des <strong>boutiques en ligne modernes</strong> avec des interfaces utilisateur intuitives et des fonctionnalités avancées pour maximiser vos ventes.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM4 6h16v2H4V6zm0 12v-6h16.001l.001 6H4z"></path><path d="M6 14h6v2H6z"></path></svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Paiements Sécurisés</h3>
                    <p class="text-lg text-gray-700">
                        Intégrez des systèmes de <strong>paiements sécurisés</strong> pour assurer la confiance de vos clients et la protection de leurs données.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Optimisation SEO E-Commerce</h3>
                    <p class="text-lg text-gray-700">
                        Nos sites e-commerce sont <strong>optimisés pour le SEO</strong>, garantissant une meilleure visibilité et un positionnement élevé sur les moteurs de recherche.
                    </p>
                </div>
                <!-- Service 4 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;"><path d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758a2.01 2.01 0 0 1 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.08.182.15.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.046.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.01 2.01 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 15h-4.758a4.03 4.03 0 0 0-2.242.689V6c0-.551.448-1 1-1h6v13z"></path></svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Gestion de Catalogue</h3>
                    <p class="text-lg text-gray-700">
                        Simplifiez la <strong>gestion de votre catalogue</strong> de produits avec des outils efficaces pour ajouter, modifier et organiser vos articles.
                    </p>
                </div>
                <!-- Service 5 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;"><path d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"></path></svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Gestion des Promotions et Réductions</h3>
                    <p class="text-lg text-gray-700">
                        Optimisez vos ventes grâce à une gestion simplifiée des <strong>promotions et réductions</strong>. Créez, gérez et suivez facilement vos offres spéciales pour attirer et fidéliser vos clients.
                    </p>
                </div>
                <!-- Service 6 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <svg class="mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: #0369a1;transform: ;msFilter:;"><path d="M20 3H7c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h6c1.103 0 2-.897 2-2h8c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM6 9h4l-.003 9H4V9h2zm6 8V9c0-1.103-.897-2-2-2H7V5h11v12h-6z"></path></svg>
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Responsive Design</h3>
                    <p class="text-lg text-gray-700">
                        Offrez une <strong>expérience fluide</strong> sur tous les appareils avec nos designs responsives et adaptatifs.
                    </p>
                </div>
            </div>
        </section>
        <section id="contact" class="bg-sky-800 text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Prêt à lancer votre boutique en ligne ?</h2>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <h3 class="text-2xl font-semibold text-sky-700 mb-2">Package E-Commerce WordPress</h3>
                    <p class="text-lg text-gray-700 mb-4">À partir de <strong>1 600 €</strong></p>
                    <p class="text-gray-700 mb-4">Création de petites boutiques en ligne sous WordPress avec WooCommerce. Inclus : Configuration de la boutique, intégration des produits, options de paiement, et gestion des commandes.</p>
                    {{-- <a href="mailto:contact@votreentreprise.com" class="bg-sky-700 text-white hover:bg-sky-800 font-semibold py-3 px-6 rounded-lg shadow-md">Demandez un devis</a> --}}
                </div>
                <p class="text-lg md:text-xl my-6">Contactez-nous dès aujourd'hui pour discuter de votre projet e-commerce et obtenir un devis personnalisé.</p>
                <a href="/contact" class="bg-white text-sky-700 hover:bg-gray-200 font-semibold py-3 px-6 rounded-lg shadow-md">Contactez-nous</a>
                <p class="text-lg md:text-xl my-6">Vous désirez un site vitrine? Visitez les services <strong class="text-2xl">Site vitrine</strong>.</p>
                <a href="/site-vitrine" class="bg-white text-sky-700 hover:bg-gray-200 font-semibold py-3 px-6 rounded-lg shadow-md">Site vitrine</a>
            </div>
        </section>    
    </div>
@endsection
