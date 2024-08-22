document.addEventListener("DOMContentLoaded", function() {
    var scrollToTopButtons = document.querySelectorAll(".scroll-to-top-button");

    // Masquer les boutons immédiatement après le chargement de la page
    scrollToTopButtons.forEach(function(button) {
        button.style.display = "none";
    });

    // Ajouter l'événement de clic pour chaque bouton
    scrollToTopButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });

    // Fonction pour gérer l'affichage des boutons en fonction du défilement
    function toggleScrollToTopButtons() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButtons.forEach(function(button) {
                button.style.display = "block";
            });
        } else {
            scrollToTopButtons.forEach(function(button) {
                button.style.display = "none";
            });
        }
    }

    // Ajouter l'écouteur d'événements pour le défilement
    window.addEventListener("scroll", toggleScrollToTopButtons);

    // Appeler la fonction immédiatement pour appliquer le style correct au chargement
    toggleScrollToTopButtons();
});
