document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        const image = card.querySelector('img');

        // Appliquer les propriétés de transition à l'image
        image.style.transition = 'filter 0.3s ease, opacity 0.3s ease';

        card.addEventListener('mouseover', () => {
            // Appliquer les effets de survol
            image.style.filter = 'blur(4px)';
            image.style.opacity = '0.85';
        });

        card.addEventListener('mouseout', () => {
            // Réinitialiser les effets au retour du survol
            image.style.filter = 'none';
            image.style.opacity = '1';
        });
    });
});
