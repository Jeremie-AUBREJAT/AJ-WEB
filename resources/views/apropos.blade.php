@extends('layouts.appsecond')

@section('content')
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
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                style="fill: #0369a1;transform: ;msFilter:;">
                <path
                    d="M12 10c1.151 0 2-.848 2-2s-.849-2-2-2c-1.15 0-2 .848-2 2s.85 2 2 2zm0 1c-2.209 0-4 1.612-4 3.6v.386h8V14.6c0-1.988-1.791-3.6-4-3.6z">
                </path>
                <path
                    d="M19 2H5c-1.103 0-2 .897-2 2v13c0 1.103.897 2 2 2h4l3 3 3-3h4c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-5 15-2 2-2-2H5V4h14l.002 13H14z">
                </path>
            </svg>
        </div>
        <h1 class="text-2xl font-bold mt-4 mb-4 mx-auto text-sky-700 text-center">À PROPOS</h1>
        <div class="bg-white shadow-lg rounded-lg p-4 lg:p-8 w-full text-xl text-gray-700">
            <p class="mb-6">Bienvenue sur mon site ! Je suis <strong class="font-semibold">AUBREJAT Jérémie</strong>, développeur web freelance spécialisé dans la création de sites internet modernes et fonctionnels.</p>
            <p class="mb-6">Contrairement à ce que le terme "nous" pourrait laisser penser, je suis en réalité un développeur web indépendant, travaillant seul. Mon objectif est de fournir un service personnalisé et de qualité en me consacrant entièrement à chaque projet. Je tiens à être transparent avec vous : derrière chaque projet, il y a un seul professionnel passionné, prêt à vous aider à réaliser vos idées.</p>
            <p class="mb-6">En tant que développeur web junior, je mets un point d’honneur à rester à jour avec les dernières technologies et tendances pour offrir des solutions innovantes et adaptées à vos besoins. Chaque projet est pour moi l'occasion de mettre en pratique mes compétences et de m’investir pleinement pour garantir votre satisfaction.</p>
            <p class="mb-6">Mon approche consiste à comprendre en profondeur les besoins spécifiques de chaque client, afin de créer des solutions web qui ne sont pas seulement esthétiques, mais aussi fonctionnelles et adaptées à votre activité. Je suis passionné par la création de sites qui non seulement répondent aux attentes de mes clients, mais qui les dépassent également en offrant une expérience utilisateur exceptionnelle.</p>
            <p class="mb-6">Je crois en l’importance d’une communication claire et d’un suivi rigoureux tout au long du processus de développement. Vous pouvez compter sur moi pour être disponible et réactif à vos questions et préoccupations, et pour vous fournir des mises à jour régulières sur l’avancement de votre projet.</p>
            <p class="mb-6">N’hésitez pas à me contacter pour discuter de vos projets ou pour toute question concernant les services que je propose. Je suis là pour vous accompagner tout au long de votre projet et vous fournir des solutions sur mesure.</p>
            <p>Merci de votre visite et au plaisir de travailler avec vous !</p>
        </div>
        </div>

    </section>
@endsection
