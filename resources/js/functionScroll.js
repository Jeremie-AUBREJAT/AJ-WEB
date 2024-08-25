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

        // Ajuster la hauteur totale du document pour éviter l'espace vide
        document.body.style.height = 'auto';
        const totalHeight = content.offsetHeight + headerHeight + footer.offsetHeight;
        document.body.style.height = `${totalHeight}px`;
    });
});
