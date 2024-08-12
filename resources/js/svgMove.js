function lancerAnimation() {
    var chemin1 = document.getElementById('path1');
    var chemin2 = document.getElementById('path2');
    var chemin3 = document.getElementById('path3');
    var chemin4 = document.getElementById('path4');
    var chemin5 = document.getElementById('path5');
    // var chemin6 = document.getElementById('path6');
    
    // Préparation initiale des chemins
    chemin1.style.transform = 'translate(0, 650px)';
    chemin2.style.transform = 'translate(0, -650px)';
    chemin3.style.transform = 'translate(-850px, 0)';
    chemin4.style.transform = 'translate(850px, 0)';
    chemin5.style.transform = 'translate(0, 450px)';
    // chemin6.style.transform = 'translate(0, 650px)';
   

    // Définition des transitions
    chemin1.style.transition = 'transform 0.5s ease, opacity 1s ease';
    chemin2.style.transition = 'transform 0.5s ease, opacity 1s ease';
    chemin3.style.transition = 'transform 0.3s ease, opacity 1s ease';
    chemin4.style.transition = 'transform 0.3s ease, opacity 1s ease';
    chemin5.style.transition = 'transform 0.3s ease,opacity 1s ease';
    // chemin6.style.transition = 'transform 0.3s ease,opacity 1s ease';

    // Démarrage de l'animation après un délai de 5 secondes
    setTimeout(function() {
        // Déclenchement des animations
        chemin1.style.transform = 'translate(0, 0)';
        chemin1.style.opacity = '1';
        chemin2.style.transform = 'translate(0, 0)';
        chemin2.style.opacity = '1';
        setTimeout(function() {
            chemin3.style.transform = 'translate(0, 0)';
            chemin3.style.opacity = '1';
            chemin4.style.transform = 'translate(0, 0)';
            chemin4.style.opacity = '1';
            chemin5.style.transform = 'translate(0, 0)';
                chemin5.style.opacity = '1';
            setTimeout(function() {
                
                // chemin6.style.transform = 'translate(0, 0)';
                // chemin6.style.opacity = '1';
            }, 1050);
        }, 950);
    }, 500);
}

// Appel de la fonction après le chargement du DOM
document.addEventListener("DOMContentLoaded", lancerAnimation);





  window.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('header');

    function setHeaderBackground() {
        const orientation = window.matchMedia("(orientation: portrait)").matches ? 'portrait' : 'landscape';
        const imageUrl = orientation === 'portrait' ? 'images/back2 - Copie.png' : 'images/back2.png';
        header.style.backgroundImage = `url('${imageUrl}')`;
        
        // Rafraîchir la page seulement si l'orientation de l'appareil change
        if (window.orientationChanged) {
            window.location.reload();
            window.orientationChanged = false; // Réinitialiser la variable
        }
    }

    setHeaderBackground(); // Définir l'image de fond initiale lors du chargement de la page

    // Écouter les changements d'orientation de l'appareil et changer l'image de fond en conséquence
    window.addEventListener('orientationchange', function () {
        window.orientationChanged = true; // Indiquer que l'orientation de l'appareil a changé
        setHeaderBackground();
    });
});


