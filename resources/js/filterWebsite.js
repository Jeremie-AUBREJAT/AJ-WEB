document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.filter-button');
    const select = document.getElementById('category-select');
    const cards = document.querySelectorAll('.card');
    const noResultsMessage = document.getElementById('no-results');

    function filterCards(filter) {
        let hasVisibleCards = false;

        cards.forEach(card => {
            const category = card.getAttribute('data-category');

            if (filter === 'all' || category === filter) {
                card.style.display = ''; // Afficher la carte
                hasVisibleCards = true;
            } else {
                card.style.display = 'none'; // Masquer la carte
            }
        });

        // Afficher ou masquer le message en fonction des résultats
        noResultsMessage.style.display = hasVisibleCards ? 'none' : 'block';
    }

    // Ajouter des écouteurs d'événements pour les boutons de bureau
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            filterCards(filter);
        });
    });

    // Ajouter un écouteur d'événements pour le sélecteur mobile
    select.addEventListener('change', () => {
        const filter = select.value;
        filterCards(filter);
    });

    // Fonction pour afficher/masquer les éléments en fonction de la taille de l'écran
    function updateVisibility() {
        const desktop = document.getElementById('desktop');
        const smartphone = document.getElementById('smartphone');

        const breakpoint = 768; // Définissez le point de rupture en pixels

        if (window.innerWidth >= breakpoint) {
            desktop.classList.remove('hidden');
            smartphone.classList.add('hidden');
        } else {
            desktop.classList.add('hidden');
            smartphone.classList.remove('hidden');
        }
    }

    // Exécuter la fonction lors du chargement de la page
    updateVisibility();

    // Ajouter un écouteur d'événements pour les changements de taille de la fenêtre
    window.addEventListener('resize', updateVisibility);
});