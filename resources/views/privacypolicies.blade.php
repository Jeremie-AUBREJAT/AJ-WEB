@extends('layouts.appsecond') <!-- Assurez-vous que le nom de votre layout est correct -->
@section('title', 'Politique de Confidentialité - AJ-Web')

@section('meta-description', "Découvrez la politique de confidentialité d'AJ-Web, qui décrit comment nous collectons, utilisons, et protégeons vos données personnelles. Assurez-vous que vos informations sont en sécurité avec nous.")
@section('content')
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
                class="fill-current text-sky-700 ml-4 mr-2" style="fill: #ffffff; stroke: #000000; stroke-width: 0.6px;">
                <path d="m19 12-7-6v5H6v2h6v5z" />
            </svg>
            <!-- Troisième SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                style="fill: #ffffff; stroke: #000000; stroke-width: 0.4px;">
                <path
                    d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm4 10.723V20h-2v-2.277a1.993 1.993 0 0 1 .567-3.677A2.001 2.001 0 0 1 14 16a1.99 1.99 0 0 1-1 1.723z">
                </path>
            </svg>
        </div>
        <h1 class="text-xl lg:text-3xl font-bold mt-4 mx-auto text-white text-center text-shadow-custom">POLITIQUE DE
            CONFIDENTIALITÉ</h1>
    </section>
    <section class="container mx-auto px-4 py-16 bg-gray-50">
        <!-- Contenu principal -->
        <div class="bg-white shadow-lg rounded-lg p-8 w-full">

            <p class="text-gray-700 mb-6">Dernière mise à jour : 08/08/2024</p>

            <p class="text-gray-700 mb-6">
                Chez AJ-WEB, nous attachons une grande importance à la protection de vos informations personnelles. Cette
                politique de confidentialité explique comment nous recueillons, utilisons et protégeons vos données
                personnelles lorsque vous utilisez notre site Web.
            </p>

            <h2 class="text-xl font-semibold text-sky-700 mb-4">1. Informations Collectées</h2>
            <p class="text-gray-700 mb-6">
                Nous collectons les informations suivantes lorsque vous interagissez avec notre site :
            <ul class="list-disc list-inside ml-6 mb-4">
                <li>Nom et Prénom</li>
                <li>Numéro de Téléphone</li>
                <li>Adresse E-mail</li>
            </ul>
            Ces informations sont collectées uniquement lorsque vous nous les fournissez volontairement, par exemple en nous
            contactant via notre formulaire de contact ou par e-mail.
            </p>

            <h2 class="text-xl font-semibold text-sky-700 my-4">2. Utilisation des Informations</h2>
            <p class="text-gray-700 mb-6">
                Les données personnelles que nous collectons sont utilisées uniquement pour les objectifs suivants :
            <ul class="list-disc list-inside ml-6 mb-4">
                <li>Répondre à vos demandes : Nous utilisons votre nom, prénom, numéro de téléphone et adresse e-mail pour
                    répondre à vos questions, demandes ou commentaires.</li>
                <li>Communication commerciale : Vos informations peuvent être utilisées pour vous envoyer des informations
                    sur nos services, promotions ou autres communications pertinentes. Vous pouvez vous désabonner de ces
                    communications à tout moment.</li>
            </ul>
            </p>

            <h2 class="text-xl font-semibold text-sky-700 mb-4">3. Conservation des Données</h2>
            <p class="text-gray-700 mb-6">
                Vos données personnelles sont conservées sur une boîte e-mail hébergée chez Free.fr. Nous ne conserverons
                vos données que pour la durée nécessaire à l'accomplissement des objectifs mentionnés ci-dessus.
            </p>

            <h2 class="text-xl font-semibold text-sky-700 mb-4">4. Partage des Données</h2>
            <p class="text-gray-700 mb-6">
                Nous ne partageons pas vos informations personnelles avec des tiers. Vos données sont strictement utilisées
                à des fins internes au sein d'AJ-WEB et ne seront pas transmises ou vendues à des tiers.
            </p>

            <h2 class="text-xl font-semibold text-sky-700 mb-4">5. Sécurité des Données</h2>
            <p class="text-gray-700 mb-6">
                Nous prenons des mesures appropriées pour protéger vos données personnelles contre les accès non autorisés,
                la divulgation, la modification ou la destruction. Nous nous engageons à garantir la sécurité de vos
                informations.
            </p>

            <h2 class="text-xl font-semibold text-sky-700 mb-4">6. Vos Droits</h2>
            <p class="text-gray-700 mb-6">
                Conformément au Règlement Général sur la Protection des Données (RGPD), vous avez les droits suivants
                concernant vos informations personnelles :
            <ul class="list-disc list-inside ml-6 mb-4">
                <li>Droit d'accès : Vous pouvez demander l'accès à vos données personnelles que nous détenons.</li>
                <li>Droit de rectification : Vous pouvez demander la correction de vos données personnelles si elles sont
                    inexactes ou incomplètes.</li>
                <li>Droit de suppression : Vous pouvez demander la suppression de vos données personnelles, sous réserve de
                    certaines conditions.</li>
                <li>Droit d'opposition : Vous pouvez vous opposer à l'utilisation de vos données à des fins de marketing
                    direct.</li>
            </ul>
            Pour exercer ces droits, veuillez nous contacter à l'adresse suivante : [votre adresse e-mail de contact].
            </p>

            <h2 class="text-xl font-semibold text-sky-700 my-4">7. Modifications de cette Politique</h2>
            <p class="text-gray-700 mb-6">
                Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Toute
                modification sera publiée sur cette page avec une mise à jour de la date. Nous vous encourageons à consulter
                régulièrement cette politique pour rester informé des changements éventuels.
            </p>

            <h2 class="text-xl font-semibold text-sky-700 mb-4">8. Contact</h2>
            <p class="text-gray-700 mb-6">
                Pour toute question concernant cette politique de confidentialité, veuillez nous contacter à l'adresse
                suivante : [votre adresse e-mail de contact].
            </p>
        </div>
        </div>
    </section>
@endsection
