document.addEventListener('scroll', function() {
    const scrollPosition = window.pageYOffset;
    const container = document.querySelector('.image-container');
    const image = document.querySelector('.scrolling-image');

    // Calculer la hauteur visible de l'image et la hauteur totale du conteneur
    const containerHeight = container.offsetHeight;
    const imageHeight = image.offsetHeight;

    // Déplacement de l'image : ajustez la vitesse en modifiant le facteur multiplicateur (ex: 0.5)
    let scrollOffset = (scrollPosition * 0.7);

    // Limiter le défilement à la hauteur de l'image moins la hauteur du conteneur
    if (scrollOffset > imageHeight - containerHeight) {
        scrollOffset = imageHeight - containerHeight;
    }

    // Appliquer le décalage de défilement à l'image
    image.style.transform = `translateY(-${scrollOffset}px)`;
});