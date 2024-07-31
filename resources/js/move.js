function isSmartphone() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

window.onload = function() {
  if (!isSmartphone()) {
    var elementsToWatch = [
      { id: 'Right', id2: 'Left' },
      { id: 'Right2', id2: 'Left2' },
      { id: 'Right3', id2: 'Left3' }
    ];

    elementsToWatch.forEach(function(item) {
      var elementToWatch = document.getElementById(item.id);
      var elementToWatch2 = document.getElementById(item.id2);

      function isElementPartiallyInViewport(el) {
        if (!el) return false;
        var rect = el.getBoundingClientRect();
        var windowHeight = window.innerHeight || document.documentElement.clientHeight;
        var windowWidth = window.innerWidth || document.documentElement.clientWidth;
    
        return (
          rect.top <= windowHeight &&
          rect.bottom >= 0 &&
          rect.left <= windowWidth &&
          rect.right >= 0
        );
      }

      function updateElementVisibility(elementToWatch, elementToWatch2) {
        if (isElementPartiallyInViewport(elementToWatch)) {
          elementToWatch.classList.add('moveRight');
          elementToWatch.classList.remove('invisible');
          elementToWatch2.classList.add('moveLeft');
          elementToWatch2.classList.remove('invisible');
        }
      }

      updateElementVisibility(elementToWatch, elementToWatch2);

      window.addEventListener('scroll', function() {
        updateElementVisibility(elementToWatch, elementToWatch2);
      });

      window.addEventListener('resize', function() {
        updateElementVisibility(elementToWatch, elementToWatch2);
      });
    });
  } else {
    addClassesOnMobilePortrait(); // Appel de la fonction pour les mobiles
  }
};

// Fonction pour ajouter les classes sur mobile en mode portrait
function addClassesOnMobilePortrait() {
  // Vérifier si l'appareil est un mobile et si l'orientation est portrait
  if (window.matchMedia("(orientation: portrait)").matches) {
      // Ajouter la classe moveRight à l'élément avec l'ID Right3
      document.getElementById("upMove").classList.add("moveUp");
      document.getElementById("upMove2").classList.add("moveUp2");
      document.getElementById("moveUp3").classList.add("moveUp2");
      
  }
}
