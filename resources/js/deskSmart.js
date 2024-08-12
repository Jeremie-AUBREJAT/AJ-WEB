document.addEventListener('DOMContentLoaded', function() {
    function handleResize() {
        const desktopDiv = document.getElementById('desktop');
        const smartphoneDiv = document.getElementById('smartphone');

        if (window.innerWidth >= 1024) { // Largeur d'écran pour desktop
            desktopDiv.classList.remove('hidden');
            smartphoneDiv.classList.add('hidden');
        } else { // Largeur d'écran pour smartphone et tablette
            desktopDiv.classList.add('hidden');
            smartphoneDiv.classList.remove('hidden');
        }
    }

    // Écouter les changements de taille de la fenêtre
    window.addEventListener('resize', handleResize);

    // Appeler la fonction une fois au chargement initial
    handleResize();
});


document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne toutes les divs avec la classe 'container'
    const containers = document.querySelectorAll('.container');

    // Fonction pour vérifier si un élément est visible dans la fenêtre d'affichage
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    containers.forEach(container => {
        // Ajoute un écouteur d'événement pour chaque div
        container.addEventListener('click', function() {
            // Vérifie si le conteneur est visible avant de continuer
            if (!isElementInViewport(container)) {
                return; // Si le conteneur n'est pas visible, on ne fait rien
            }

            // Récupère l'identifiant du paragraphe associé
            const targetId = container.getAttribute('data-target');
            const paragraph = document.getElementById(targetId);

            if (paragraph) {
                // Vérifie si le paragraphe est actuellement affiché
                if (paragraph.classList.contains('hidden')) {
                    // Masquer tous les autres paragraphes
                    containers.forEach(c => {
                        const p = document.getElementById(c.getAttribute('data-target'));
                        if (p && !p.classList.contains('hidden')) {
                            p.classList.add('hidden');
                        }
                    });

                    // Affiche le paragraphe correspondant
                    paragraph.classList.remove('hidden');
                } else {
                    // Masquer le paragraphe si déjà affiché
                    paragraph.classList.add('hidden');
                }
            }
        });
    });
});
