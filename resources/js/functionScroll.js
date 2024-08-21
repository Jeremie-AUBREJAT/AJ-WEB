
// document.addEventListener('scroll', function() {
//     const header = document.getElementById('header');
//     const content = document.getElementById('content');
//     const footer = document.querySelector('footer');
//     const scrollPosition = window.scrollY;
//     const headerHeight = header.offsetHeight;

//     if (scrollPosition < headerHeight) {
//         // Translation du contenu
//         content.style.transform = `translateY(-${scrollPosition}px)`;
        
//         // Réinitialiser la hauteur du footer
//         footer.style.marginTop = '0';
//     } else {
//         // Verrouillage du contenu à la hauteur du header
//         content.style.transform = `translateY(-${headerHeight}px)`;
        
//         // Ajuster la hauteur du footer pour éviter l'espace vide
//         footer.style.marginTop = `-${headerHeight}px`;
//     }
    
//     // Ajuster la hauteur totale du document pour éviter l'espace vide
//     const totalHeight = scrollPosition + window.innerHeight;
//     document.body.style.height = `${totalHeight}px`;
// });


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
//         // Translation du contenu
//         content.style.transform = `translateY(-${translateY}px)`;
        
//         // Ajuster la hauteur du footer pour éviter l'espace vide
//         footer.style.marginTop = marginTop;
        
//         // Ajuster la hauteur totale du document pour éviter l'espace vide
//         const totalHeight = scrollPosition + window.innerHeight;
//         document.body.style.height = `${totalHeight}px`;
//     });
// });
document.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    const content = document.getElementById('content');
    const footer = document.querySelector('footer');
    const scrollPosition = window.scrollY;
    const headerHeight = header.offsetHeight;

    // Utilisation de variables pour éviter les recalculs
    const translateY = Math.min(scrollPosition, headerHeight);
    const marginTop = scrollPosition < headerHeight ? '0' : `-${headerHeight}px`;

    requestAnimationFrame(() => {
        // Regroupement des modifications DOM
        content.style.transform = `translateY(-${translateY}px)`;
        footer.style.marginTop = marginTop;
    });
});
