// document.addEventListener('scroll', function() {
//     const header = document.getElementById('header');
//     const content = document.getElementById('content');
//     const footer = document.querySelector('footer');
//     const scrollPosition = window.scrollY;
//     const headerHeight = header.offsetHeight;

//     // Utilisation de variables pour éviter les recalculs
//     const translateY = Math.min(scrollPosition, headerHeight);
//     const marginTop = scrollPosition < headerHeight ? '0' : `-${headerHeight}px`;

//     requestAnimationFrame(() => {
//         // Regroupement des modifications DOM
//         content.style.transform = `translateY(-${translateY}px)`;
//         footer.style.marginTop = marginTop;

//         // Ajuster la hauteur totale du document pour éviter l'espace vide
//         document.body.style.height = 'auto';
//         const totalHeight = content.offsetHeight + headerHeight + footer.offsetHeight;
//         document.body.style.height = `${totalHeight}px`;
//     });
// });
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour vérifier si l'utilisateur est sur un appareil mobile spécifique
    function isMobile() {
        const userAgent = navigator.userAgent || navigator.vendor || window.opera;
        // Vérifier si l'utilisateur est sur un appareil mobile
        return /android|iphone|ipad|mobile/i.test(userAgent);
    }

    // Fonction de gestion du défilement
    function handleScroll() {
        const header = document.getElementById('header');
        const content = document.getElementById('content');
        const footer = document.querySelector('footer');
        const scrollPosition = window.scrollY;
        const headerHeight = header.offsetHeight;

        const translateY = Math.min(scrollPosition, headerHeight);
        const marginTop = scrollPosition < headerHeight ? '0' : `-${headerHeight}px`;

        requestAnimationFrame(() => {
            content.style.transform = `translateY(-${translateY}px)`;
            footer.style.marginTop = marginTop;

            document.body.style.height = 'auto';
            const totalHeight = content.offsetHeight + headerHeight + footer.offsetHeight;
            document.body.style.height = `${totalHeight}px`;
        });
    }

    // Ajouter l'écouteur d'événement de défilement uniquement si l'utilisateur est sur un bureau
    if (!isMobile()) {
        document.addEventListener('scroll', handleScroll);

        // Réajuster la hauteur et les marges lors du redimensionnement de la fenêtre
        window.addEventListener('resize', function() {
            handleScroll(); // Exécuter la fonction lors du redimensionnement
        });
    }
});
