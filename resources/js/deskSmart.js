function detectDevice() {
    // Récupérer l'orientation actuelle de l'écran
    var orientation = window.innerWidth > window.innerHeight ? 'landscape' : 'portrait';

    // Si l'orientation est en mode portrait
    if (orientation === 'portrait') {
        // Ajouter la classe hidden à l'élément avec l'ID desktop
        document.getElementById("desktop").classList.add("hidden");

        // Supprimer la classe hidden de l'élément avec l'ID smartphone
        document.getElementById("smartphone").classList.remove("hidden");
    } else {
        // Supprimer la classe hidden de l'élément avec l'ID desktop s'il est caché
        if (document.getElementById("desktop").classList.contains("hidden")) {
            document.getElementById("desktop").classList.remove("hidden");
        }

        // Ajouter la classe hidden à l'élément avec l'ID smartphone
        document.getElementById("smartphone").classList.add("hidden");
    }

    // Recharger la page uniquement si l'orientation a changé entre portrait et paysage
    if ((orientation === 'portrait' && currentOrientation === 'landscape') ||
        (orientation === 'landscape' && currentOrientation === 'portrait')) {
        location.reload();
    }
}

// Variable pour stocker l'orientation précédente
var currentOrientation = window.innerWidth > window.innerHeight ? 'landscape' : 'portrait';

// Appeler la fonction detectDevice lors du chargement de la page et lorsque l'orientation de l'écran change
window.onload = detectDevice;
window.addEventListener('orientationchange', detectDevice);
