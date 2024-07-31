document.addEventListener('DOMContentLoaded', function() {
    var content = document.getElementById('content');
    var footer = document.querySelector('footer');
    var firstSection = document.getElementById('header');
    var lastScrollPosition = 0;
    var ticking = false;

    // Décalage initial de la div content
    var initialTranslate = 0; // Décalage de -100px

    // Applique le décalage initial au chargement de la page
    content.style.transform = 'translateY(' + initialTranslate + 'px)';

    function updateContent(scrollPos) {
        var windowHeight = window.innerHeight;
        var footerHeight = footer.offsetHeight;
        var firstSectionPos = firstSection.getBoundingClientRect().bottom;

        if (firstSectionPos < 0) {
            return;
        }

        var lowerLimit = content.offsetTop + content.offsetHeight;

        if (scrollPos < lowerLimit - windowHeight + footerHeight) {
            var contentHeight = content.offsetHeight;
            var maxTranslate = Math.max(contentHeight - windowHeight, 0);
            var translateValue = 'translateY(' + Math.max(initialTranslate - scrollPos, -maxTranslate) + 'px)';
            content.style.transform = translateValue;
            content.style.height = Math.max(contentHeight, windowHeight) + 'px';
        }
    }

    function requestTick() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateContent(lastScrollPosition);
                ticking = false;
            });

            ticking = true;
        }
    }

    window.addEventListener('scroll', function() {
        lastScrollPosition = window.scrollY;
        requestTick();
    });

    window.addEventListener('resize', function() {
        requestTick();
    });

    // Appel initial pour ajuster la position du contenu
    updateContent(window.scrollY);
});


