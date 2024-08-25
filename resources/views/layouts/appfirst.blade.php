<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    @vite(['resources/css/app.css', 'resources/css/move.css', 'resources/js/app.js', 'resources/js/progress.js', 'resources/js/hautPage.js', 'resources/js/svgMove.js', 'resources/js/deskSmart.js', 'resources/js/reviewStars.js', 'resources/js/carouselAvis.js', 'resources/js/blurcard.js', 'resources/js/navChange.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AJ-Web - Création et Développement de Sites internet, site Web Vitrine et E-commerce à Savigny-en-Sancerre (Cher 18, Nièvre 58, Loiret 45, Cosne-sur-Loire, Bourges, Nevers, Gien, Sancerre, France). Découvrez nos solutions personnalisées pour booster votre présence en ligne. Expertise locale et service sur mesure pour tous vos besoins digitaux.">
    <title>AJ-Web - Création et développement de Sites Web Vitrine et E-Commerce à Savigny-en-Sancerre</title>
    <link rel="icon" href="{{ asset('images/ajweb.svg') }}" type="image/svg+xml">
</head>

<body>
    <header id="header" class="fixed h-screen flex items-center justify-center bg-cover bg-center">
        <div id="desknav"
            class="h-16 flex justify-between items-center top-0 fixed w-full z-20 bg-gradient-to-r from-gray-700 to-gray-900">

            <div class="flex items-center">
                <img src="{{ asset('images/ajwebWhite.svg') }}" class="p-6 w-20" alt="Logo">
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
            <nav class="bg-gray-00 text-white py- px-6 flex justify-between items-center ">
                {{-- <div class="space-x-4"> --}}
                <a href="/"
                    class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">ACCUEIL</a>
                <div class="relative inline-block text-left">
                    <a href="#services"
                        class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">SERVICES</a>
                    <div
                        class="dropdown-content absolute hidden bg-gray-800 shadow-lg rounded-lg mt- py-4 w-48 text-ceter">
                        <a href="/site-vitrine" class="block px-4 py-2 text-lg text-white hover:text-sky-400">Site
                            vitrine</a>
                        <a href="/site-Ecommerce" class="block px-4 py-2 text-lg text-white hover:text-sky-400">Site
                            E-commerce</a>
                    </div>
                </div>
                <a href="/créations-web"
                    class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">CRÉATIONS
                    WEB</a>
                <a href="/contact"
                    class="text-xl px-4 font-semibold transition-transform duration-300 transform hover:scale-110 hover:text-sky-400">CONTACT</a>
        </div>
        </nav>
        </div>
        <div class="h-screen lg:h-full flex flex-col items-center justify-center">
            <svg class="w-11/12 mt-20 lg:mt-40" version="1.1" id="svg1" width="1920" height="1920"
                viewBox="0 0 1920 1920">
                <defs id="defs1">
                    <rect x="340.64398" y="427.68549" width="18.267973" height="82.743172" id="rect6" />
                    <rect x="79.519417" y="507.2049" width="629.70776" height="106.38408" id="rect5" />
                    <rect x="122.50288" y="769.40405" width="1031.6031" height="427.68549" id="rect4" />
                    <rect x="204.17146" y="451.32639" width="434.13303" height="251.45328" id="rect2" />
                    <rect x="253.60246" y="498.60822" width="638.3045" height="212.76816" id="rect1" />
                </defs>

                <g id="g1">
                    <g transform="matrix(2.8405871,0,0,2.8033497,983.75025,907.698)" id="g4">
                        <path
                            d="m -12.081,-93.258 -65.542,140.55 a 2.9466,2.9466 57.5 0 0 2.6706,4.1919 h 19.47 a 4.6613,4.6613 147.5 0 0 4.2246,-2.6914 l 9.516,-20.407 a 2.5157,2.5157 147.5 0 1 2.28,-1.4525 h 36.317 A 3.9714,3.9714 122.5 0 0 0.4545,21.2833 L -7.4439,4.3453 a 3.4,3.4 32.5 0 0 -3.0815,-1.9631 h -16.93 a 1.3763,1.3763 57.5 0 1 -1.2474,-1.958 l 32.986,-70.738 a 4.5187,4.5187 90 0 0 -3e-7,-3.8194 l -8.9203,-19.13 a 4.1063,4.1063 -180 0 0 -7.4431997,10e-7 z"
                            style="opacity:0;fill:#ffffff" id="path2" />
                        <path
                            d="m 12.516,-42.382 -9.4169,20.195 a 4.2157,4.2157 90 0 0 -3e-7,3.5633 L 21.7931,21.4663 A 21.104,21.104 122.5 0 1 2.6660997,51.4893 h -7.7809 a 3.2454,3.2454 135 0 0 -3.2454,3.2454 v 18.06 a 3.2454,3.2454 45 0 0 3.2454,3.2454 h 8.7523 A 45.021,45.021 122.5 0 0 44.4405,11.9921 l -25.355,-54.374 a 3.6242,3.6242 9.1112e-6 0 0 -6.5694,-10e-7 z"
                            style="opacity:0;fill:#ffffff" id="path1" />
                        <path
                            d="m 35.442,-46.262 7.7456,16.611 a 4.2751,4.2751 40.051 0 0 2.7608,2.3207 l 20.07,5.4157 a 1.5628,1.5628 80.417 0 1 0.4728,2.8003 l -12.127,8.2626 a 2.6032,2.6032 105.37 0 0 -0.89353,3.2514 l 7.7826,16.69 a 1.4774,1.4774 12.201 0 0 2.3004,0.4974 l 26.394,-22.621 a 10.154,10.154 78.99 0 0 -3.3725,-17.335 l -50.244,-16.888 a 0.72611,0.72611 131.79 0 0 -0.88942,0.99513 z"
                            style="opacity:0;fill:#ffffff" id="path4" />
                        <path
                            d="m -52.161,-46.262 -7.7456,16.611 a 4.2751,4.2751 139.95 0 1 -2.7608,2.3207 l -20.07,5.4157 a 1.5628,1.5628 99.583 0 0 -0.4728,2.8003 l 12.127,8.2626 a 2.6032,2.6032 74.634 0 1 0.89353,3.2514 l -7.7826,16.69 a 1.4774,1.4774 167.8 0 1 -2.3004,0.4974 l -26.394,-22.621 a 10.154,10.154 101.01 0 1 3.3725,-17.335 l 50.244,-16.888 a 0.72611,0.72611 48.211 0 1 0.88942,0.99513 z"
                            style="opacity:0;fill:#ffffff" id="path3" />
                    </g>
                    <g id="g5" transform="matrix(0.49947185,0,0,0.62843793,456.67801,480.68109)">
                        {{-- <path style="opacity:0;fill:#ffffff" id="path6" /> --}}
                    </g>
                    <path style="opacity:0;fill:#ffffff"
                        d="m 755.85663,1116.8717 c -1.96525,-2.001 -1.89941,-4.7111 0.72226,-29.727 1.37933,-13.1619 2.68041,-21.7589 3.51916,-23.2536 1.51038,-2.6914 4.81897,-4.3517 8.672,-4.3517 4.54688,0 4.80116,1.6838 2.72717,18.0589 -1.02259,8.0742 -2.00085,15.5197 -2.17382,16.5454 -0.17297,1.0257 -0.19878,1.8649 -0.0576,1.8649 0.14148,0 4.92906,-7.005 10.63904,-15.5667 12.21365,-18.3135 14.01095,-20.1552 20.20341,-20.7035 4.0627,-0.3598 4.58727,-0.1999 6.03756,1.8397 1.48259,2.085 1.51129,3.2529 0.43112,17.5413 -0.63647,8.4191 -0.95884,15.4903 -0.71643,15.7136 0.24241,0.2234 4.62694,-6.4141 9.74345,-14.75 10.29572,-16.7736 13.55538,-20.5436 17.76262,-20.5436 2.91031,0 5.55105,1.822 5.55105,3.8301 0,1.8029 -1.53359,4.3583 -17.15737,28.5894 -8.00263,12.4113 -15.45559,23.0144 -17.04099,24.2437 -1.93718,1.5021 -3.85025,2.1809 -6.12175,2.1721 -7.09138,-0.027 -7.43128,-1.2425 -5.88538,-21.0456 0.70851,-9.0749 1.15662,-16.8632 0.99589,-17.3075 -0.16065,-0.4442 -5.43645,6.7941 -11.72389,16.0853 -6.28734,9.2912 -11.93625,17.4696 -12.5531,18.1743 -3.61297,4.1282 -10.73043,5.4864 -13.57444,2.5905 z m 73.68087,-0.6156 c -0.7774,-0.7164 -1.41342,-1.9544 -1.41342,-2.7512 0,-1.6641 15.52332,-43.7169 17.69256,-47.9293 2.50519,-4.8648 4.23351,-5.2074 26.27227,-5.2074 16.26853,0 20.00471,0.2176 21.10206,1.2287 1.61572,1.4889 1.04743,3.9373 -1.38589,5.97 -1.54996,1.2949 -3.99857,1.5619 -17.59478,1.9186 l -15.79433,0.4144 -2.4916,6.838 -2.49151,6.838 h 13.69991 c 14.18825,0 15.85863,0.3706 15.85863,3.5188 0,0.8413 -0.99354,2.4451 -2.20781,3.5641 -2.15953,1.99 -2.52111,2.0344 -16.55969,2.0344 h -14.35193 l -2.71504,7.4596 -2.71494,7.4596 h 14.83648 c 8.50714,0 15.57872,0.3661 16.57632,0.858 2.49745,1.2317 2.14558,3.8687 -0.88939,6.6654 l -2.62923,2.4228 h -20.69262 c -17.61214,0 -20.90301,-0.1939 -22.10605,-1.3025 z m 58.53111,0.061 c -0.81366,-0.7498 -1.47934,-2.0152 -1.47934,-2.812 0,-1.664 15.52331,-43.7168 17.69255,-47.9293 2.41857,-4.6965 4.60004,-5.2096 22.06403,-5.1891 17.89854,0.021 21.94532,0.9782 24.06437,5.6924 2.72888,6.0708 -1.12658,14.8217 -8.35792,18.9704 l -3.78026,2.1687 3.16629,2.6751 c 2.81613,2.3791 3.15811,3.1174 3.09173,6.6746 -0.136,7.2922 -6.34572,14.9117 -15.21624,18.6707 -4.11811,1.7451 -5.98405,1.9284 -22.13159,2.1738 -15.41664,0.2343 -17.82018,0.096 -19.11362,-1.0953 z m 36.05809,-9.7967 c 4.9994,-2.4453 7.47833,-9.7292 4.17163,-12.258 -0.94957,-0.7262 -4.71104,-1.2313 -10.68708,-1.4351 l -9.22176,-0.3146 -2.48711,6.9283 c -1.3679,3.8106 -2.69192,7.439 -2.94223,8.0631 -0.7032,1.7532 17.2796,0.9174 21.16655,-0.9837 z m 3.88901,-23.7725 c 3.9482,-1.0107 7.83254,-4.6207 8.55535,-7.9511 0.85593,-3.9436 -1.05885,-4.7825 -11.05649,-4.8438 l -8.60787,-0.053 -2.50438,6.8379 -2.50429,6.838 h 6.45924 c 3.55261,0 7.89891,-0.3731 9.65844,-0.8236 z"
                        id="path5" />
                </g>
            </svg>
            <div class="text-gray-100 text-xl md:text-3xl uppercase italic mb-20 sm:mb-24 text-center text-shadow-custom">
                Développement et création de site internet
                <div class="mt-2 border-t-4 border-gray-100 mx-40 rounded-full"></div>
            </div>
            <div id="navsmart"
                class="hidden fixed bottom-0 left-0 right-0 bg-gradient-to-r from-gray-700 to-gray-900 text-white flex flex-col items-center py-2 shadow-lg z-50">
                <!-- Bouton pour afficher/masquer le menu -->
                <div class="fixed bottom-0 right-2 mb-16  lg:hidden z-0">
                    <button class="scroll-to-top-button mr-2 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: #0284c7;transform: ;msFilter:;"><path d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-15 5 5h-4v5h-2v-5H7l5-5z"></path></svg>
                    </button>
                </div>
                <div
                    class="fixed top-0 left-0 right-0 bg-gradient-to-r from-gray-900 to-gray-700 text-white flex items-center justify-center py-2 shadow-lg z-50">
                    <svg class="mr-4" width="20" height="20" viewBox="0 0 153.10083 127.33417" version="1.1"
                    id="svg1">
                    <defs id="defs1" />
                    <g id="layer1"
                        transform="translate(-28.575002,-84.931247)">
                        <g transform="matrix(0.75157199,0,0,0.7417196,111.40818,155.86498)" id="g4"
                            style="fill:#ffff">
                            <path
                                d="m -12.081,-93.258 -65.542,140.55 a 2.9466,2.9466 57.5 0 0 2.6706,4.1919 h 19.47 a 4.6613,4.6613 147.5 0 0 4.2246,-2.6914 l 9.516,-20.407 a 2.5157,2.5157 147.5 0 1 2.28,-1.4525 h 36.317 A 3.9714,3.9714 122.5 0 0 0.4545,21.2833 L -7.4439,4.3453 a 3.4,3.4 32.5 0 0 -3.0815,-1.9631 h -16.93 a 1.3763,1.3763 57.5 0 1 -1.2474,-1.958 l 32.986,-70.738 a 4.5187,4.5187 90 0 0 -3e-7,-3.8194 l -8.9203,-19.13 a 4.1063,4.1063 -180 0 0 -7.4431997,10e-7 z"
                                style="opacity:1;fill:#ffff" id="path2" />
                            <path
                                d="m 12.516,-42.382 -9.4169,20.195 a 4.2157,4.2157 90 0 0 -3e-7,3.5633 L 21.7931,21.4663 A 21.104,21.104 122.5 0 1 2.6660997,51.4893 h -7.7809 a 3.2454,3.2454 135 0 0 -3.2454,3.2454 v 18.06 a 3.2454,3.2454 45 0 0 3.2454,3.2454 h 8.7523 A 45.021,45.021 122.5 0 0 44.4405,11.9921 l -25.355,-54.374 a 3.6242,3.6242 9.1112e-6 0 0 -6.5694,-10e-7 z"
                                style="opacity:1;fill:#ffff" id="path1" />
                            <path
                                d="m 35.442,-46.262 7.7456,16.611 a 4.2751,4.2751 40.051 0 0 2.7608,2.3207 l 20.07,5.4157 a 1.5628,1.5628 80.417 0 1 0.4728,2.8003 l -12.127,8.2626 a 2.6032,2.6032 105.37 0 0 -0.89353,3.2514 l 7.7826,16.69 a 1.4774,1.4774 12.201 0 0 2.3004,0.4974 l 26.394,-22.621 a 10.154,10.154 78.99 0 0 -3.3725,-17.335 l -50.244,-16.888 a 0.72611,0.72611 131.79 0 0 -0.88942,0.99513 z"
                                style="opacity:1;fill:#ffff" id="path4" />
                            <path
                                d="m -52.161,-46.262 -7.7456,16.611 a 4.2751,4.2751 139.95 0 1 -2.7608,2.3207 l -20.07,5.4157 a 1.5628,1.5628 99.583 0 0 -0.4728,2.8003 l 12.127,8.2626 a 2.6032,2.6032 74.634 0 1 0.89353,3.2514 l -7.7826,16.69 a 1.4774,1.4774 167.8 0 1 -2.3004,0.4974 l -26.394,-22.621 a 10.154,10.154 101.01 0 1 3.3725,-17.335 l 50.244,-16.888 a 0.72611,0.72611 48.211 0 1 0.88942,0.99513 z"
                                style="opacity:1;fill:#ffff" id="path3" />
                        </g>
                        <path style="fill:#ffff;stroke-width:0.264583"
                            d="m 51.111324,211.20885 c -0.519972,-0.52943 -0.502552,-1.24647 0.191098,-7.86527 0.364948,-3.48241 0.709192,-5.75704 0.931111,-6.15251 0.399622,-0.7121 1.275019,-1.15139 2.294467,-1.15139 1.203028,0 1.270307,0.44551 0.721564,4.77809 -0.270561,2.1363 -0.529392,4.10625 -0.575157,4.37763 -0.04577,0.27139 -0.05259,0.49343 -0.01524,0.49343 0.03743,0 1.304147,-1.85341 2.814913,-4.11869 3.231528,-4.84545 3.707063,-5.33273 5.345485,-5.47781 1.074923,-0.0952 1.213715,-0.0529 1.597438,0.48676 0.392268,0.55165 0.399862,0.86066 0.114067,4.64113 -0.168399,2.22756 -0.253693,4.09848 -0.189555,4.15756 0.06414,0.0591 1.224211,-1.69706 2.577954,-3.9026 2.724076,-4.43802 3.586528,-5.4355 4.699693,-5.4355 0.77002,0 1.468715,0.48207 1.468715,1.01338 0,0.47702 -0.405762,1.15314 -4.539554,7.56428 -2.117362,3.28383 -4.089291,6.08923 -4.508761,6.41448 -0.512546,0.39743 -1.018712,0.57703 -1.619713,0.5747 -1.876261,-0.007 -1.966193,-0.32874 -1.557174,-5.56831 0.18746,-2.40107 0.306022,-4.46172 0.263496,-4.57928 -0.0425,-0.11753 -1.438394,1.79761 -3.101946,4.2559 -1.663525,2.4583 -3.158133,4.62217 -3.321341,4.80862 -0.955932,1.09225 -2.839093,1.45161 -3.59157,0.6854 z m 19.49473,-0.16287 c -0.205687,-0.18955 -0.373967,-0.51711 -0.373967,-0.72793 0,-0.44029 4.107211,-11.56676 4.681156,-12.68129 0.662832,-1.28714 1.120116,-1.37779 6.951205,-1.37779 4.304382,0 5.292913,0.0576 5.583253,0.32509 0.427493,0.39394 0.277133,1.04175 -0.366683,1.57957 -0.410094,0.3426 -1.057955,0.41325 -4.655286,0.50762 l -4.178916,0.10965 -0.659236,1.80922 -0.659212,1.80922 h 3.624768 c 3.753974,0 4.195929,0.0981 4.195929,0.93102 0,0.22259 -0.262874,0.64693 -0.58415,0.943 -0.571375,0.52652 -0.667043,0.53827 -4.381418,0.53827 h -3.797281 l -0.718354,1.97368 -0.718328,1.97369 h 3.925485 c 2.250847,0 4.12187,0.0969 4.385818,0.22701 0.660784,0.32589 0.567685,1.02359 -0.235318,1.76355 l -0.69565,0.64104 h -5.474923 c -4.659878,0 -5.530588,-0.0513 -5.848892,-0.34462 z m 15.486356,0.0161 c -0.215281,-0.19839 -0.391409,-0.53319 -0.391409,-0.74401 0,-0.44027 4.107209,-11.56674 4.681154,-12.6813 0.639913,-1.24261 1.217094,-1.37837 5.837775,-1.37295 4.73566,0.006 5.80637,0.25882 6.36703,1.50612 0.72202,1.60623 -0.29807,3.92157 -2.21137,5.01925 l -1.000189,0.5738 0.837749,0.70779 c 0.7451,0.62947 0.83558,0.82481 0.81802,1.76599 -0.036,1.92939 -1.678973,3.94538 -4.025965,4.93995 -1.089583,0.46173 -1.58328,0.51023 -5.85565,0.57515 -4.078986,0.062 -4.714922,0.0254 -5.057145,-0.28979 z m 9.54037,-2.59205 c 1.322758,-0.64698 1.978641,-2.57418 1.103743,-3.24326 -0.25124,-0.19214 -1.246462,-0.32578 -2.827623,-0.3797 l -2.439924,-0.0832 -0.658048,1.83311 c -0.361923,1.00822 -0.712237,1.96824 -0.778465,2.13336 -0.186055,0.46387 4.571894,0.24273 5.600317,-0.26027 z m 1.028967,-6.28981 c 1.044628,-0.26741 2.072359,-1.22256 2.263603,-2.10372 0.226465,-1.04341 -0.280154,-1.26537 -2.925363,-1.28159 l -2.277499,-0.014 -0.662617,1.8092 -0.662594,1.80922 h 1.709008 c 0.939961,0 2.08992,-0.0987 2.555462,-0.21791 z"
                            id="path6" />
                    </g>
                </svg>
                    <span class="text-lg font-bold">AJ-WEB</span>
                </div>
                <button class="block py-2 px-4 text-center rounded-sm hover:text-white relative z-10"
                    onclick="document.getElementById('menu').classList.toggle('hidden')">
                    ☰ Menu
                </button>
                <div class="fixed bottom-0 right-0 mb-4 hidden lg:block z-0">
        </div>
                <!-- Contenu du menu -->
                <div id="menu"
                    class="hidden absolute bottom-full left-0 right-0 bg-gray-800 flex flex-col items-center border-t border-gray-700">
                    <div class="w-screen">
                        <a href="/"
                            class="block py-2 px-4 text-center rounded-sm hover:bg-sky-700 hover:text-white">Accueil</a>
                        </div>
                    <div>
                        <div class="w-screen border-t-2 border-gray-900"></div>
                        {{-- <a href="/#services"
                            class="block py-2 px-4 text-center rounded-sm hover:bg-sky-700 hover:text-white">Services:</a> --}}
                        <a href="/site-vitrine"
                            class="block py-2 px-4 text-center rounded-sm hover:bg-sky-700 hover:text-white">Services site
                            vitrine</a>
                            <div class="w-screen border-t-2 border-gray-900"></div>
                        <a href="/site-Ecommerce"
                            class="block py-2 px-4 text-center rounded-sm hover:bg-sky-700 hover:text-white">Services site
                            E-commerce</a>
                        <div class="w-screen border-t-2 border-gray-900"></div>
                    </div>
                    <div>
                        <a href="/créations-web"
                            class="block py-2 px-4 text-center rounded-sm hover:bg-sky-700 hover:text-white">Créations</a>
                        <div class="w-screen border-t-2 border-gray-900"></div>
                        <a href="/contact"
                            class="block py-2 px-4 text-center rounded-sm hover:bg-sky-700 hover:text-white">Contact</a>
                    </div>
                    @auth
                        <div class="flex space-x-4 my-4"> <!-- Ajouté espace entre les boutons -->
                            <a href="/dashboard"
                                class="inline-block bg-blue-600 text-white font-semibold text-lg py- px-4 rounded-lg shadow hover:bg-blue-800 transition duration-300">
                                Tableau de bord
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </header>
    <main id="content">
        @yield('content')
    </main>
    <footer class="bg-gradient-to-r from-gray-900 to-gray-700 text-white py-8">
        <div class="container mx-auto px-4 flex flex-wrap justify-between items-start max-w-screen-lg">
            <!-- Section à gauche (4 SVG verticalement) -->
            <div class="flex flex-col space-y-4 mt-2 mx-auto lg:mx-0">
                <a target="_blank" href="https://github.com/Jeremie-AUBREJAT"
                    class="flex items-center space-x-2 mx-auto lg:mx-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                        </path>
                    </svg>
                    <span>GITHUB</span>
                </a>
                <a target="_blank" href="https://www.facebook.com/"
                    class="flex items-center space-x-2 mx-auto lg:mx-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);">
                        <path
                            d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z">
                        </path>
                    </svg>
                    <span>FACEBOOK</span>
                </a>
                <a href="mailto:contact@aj-web.fr" class="flex items-center space-x-2 mx-auto lg:mx-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);">
                        <path
                            d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                        </path>
                    </svg>
                    <span>contact@aj-web.fr</span>
                </a>
                <a target="_blank"
                    href="https://www.google.fr/maps/place/La+Vall%C3%A9e,+18240+Savigny-en-Sancerre/@47.4141094,2.8032713,17z/data=!4m15!1m8!3m7!1s0x47f0027f624efdb1:0x526dcc015e0057df!2sLa+Vall%C3%A9e,+18240+Savigny-en-Sancerre!3b1!8m2!3d47.4141058!4d2.8058462!16s%2Fg%2F1tdn3f6h!3m5!1s0x47f0027f624efdb1:0x526dcc015e0057df!8m2!3d47.4141058!4d2.8058462!16s%2Fg%2F1tdn3f6h?entry=ttu"
                    class="flex items-center space-x-2 mx-auto lg:mx-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);">
                        <path
                            d="M12 2C7.589 2 4 5.589 4 9.995 3.971 16.44 11.696 21.784 12 22c0 0 8.029-5.56 8-12 0-4.411-3.589-8-8-8zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z">
                        </path>
                    </svg>
                    <span>18240 SAVIGNY-EN-SANCERRE</span>
                </a>
            </div>
            <!-- Section à droite -->
            <div class="flex flex-col items-center space-y-4 mx-auto lg:mx-0">

                <a href="/">
                    <img src="{{ asset('images/ajwebWhite.svg') }}" class="w-20 mt-" alt="Logo">
                </a>
                <a href="/mentions-légales" class="font-semibold italic text-lg text-white ">
                    Mentions Légales
                </a>
                <a href="/politique-confidentialite" class="font-semibold italic text-lg text-white ">
                    Politique de confidentialité
                </a>
            </div>

        </div>
        <div class="italic mx-auto text-lg text-center my-6">&copy; 2024 aj-web.fr Tous droits réservés.</div>
        <div class="fixed bottom-0 right-4 mb-4 hidden lg:block z-0">
            <button class="scroll-to-top-button mr-2 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: #0284c7;transform: ;msFilter:;"><path d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-15 5 5h-4v5h-2v-5H7l5-5z"></path></svg>
            </button>
        </div>
       
    </footer>
</body>
</html>
