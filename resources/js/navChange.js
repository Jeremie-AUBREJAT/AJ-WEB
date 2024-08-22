// function updateNavVisibility() {
//     var navsmart = document.getElementById("navsmart");
//     var desknav = document.getElementById("desknav");
//     if (window.matchMedia("(orientation: portrait)").matches) {
//         navsmart.classList.remove("hidden");
//         desknav.classList.add("hidden"); // Ajout de la classe hidden pour cacher l'élément desknav
//     } else {
//         navsmart.classList.add("hidden");
//         desknav.classList.remove("hidden"); // Suppression de la classe hidden pour afficher l'élément desknav
//     }
// }

// window.addEventListener("resize", function() {
//     updateNavVisibility();
// });

// // Appeler la fonction une première fois pour définir la visibilité initiale
// updateNavVisibility();

function updateNavVisibility() {
    var navsmart = document.getElementById("navsmart");
    var desknav = document.getElementById("desknav");

    // Détection de l'agent utilisateur pour vérifier si on est sur Android, iPhone ou iPad
    var isMobileDevice = /Android|iPhone|iPad/i.test(navigator.userAgent);

    if (isMobileDevice) {
        navsmart.classList.remove("hidden");
        desknav.classList.add("hidden");
    } else {
        navsmart.classList.add("hidden");
        desknav.classList.remove("hidden");
    }
}

// Écoute des changements de taille de la fenêtre pour mettre à jour la visibilité
window.addEventListener("resize", function() {
    updateNavVisibility();
});

// Appeler la fonction une première fois pour définir la visibilité initiale
updateNavVisibility();
