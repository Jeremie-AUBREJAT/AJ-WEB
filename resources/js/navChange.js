function updateNavVisibility() {
    var navsmart = document.getElementById("navsmart");
    var desknav = document.getElementById("desknav");
    if (window.matchMedia("(orientation: portrait)").matches) {
        navsmart.classList.remove("hidden");
        desknav.classList.add("hidden"); // Ajout de la classe hidden pour cacher l'élément desknav
    } else {
        navsmart.classList.add("hidden");
        desknav.classList.remove("hidden"); // Suppression de la classe hidden pour afficher l'élément desknav
    }
}

window.addEventListener("resize", function() {
    updateNavVisibility();
});

// Appeler la fonction une première fois pour définir la visibilité initiale
updateNavVisibility();