
document.addEventListener('DOMContentLoaded', function() {
    // Accéder aux données JSON passées depuis la vue Blade
    const reviews = window.reviewsData;

    // Sélectionner le conteneur des slides
    const slidesContainer = document.getElementById('carouselSlides');

    // Fonction pour générer le HTML des avis
    function createReviewHTML(review) {
        return `
            <div class="flex-none w-full px-4 py-4" style="box-sizing: border-box;">
                <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4" style="display: flex; flex-direction: column; height: auto; box-sizing: border-box;">
                    <p class="text-gray-600 text-sm mb-2" style="margin: 0;">Le: ${new Date(review.created_at).toLocaleDateString('fr-FR')}</p>
                    <div class="flex items-center mb-2">   
                        <h2 class="text-lg font-semibold mr-2">${review.name}</h2>
                        <div class="flex">
                            ${Array.from({ length: 5 }, (_, i) => `
                                <svg class="w-5 h-5 ${i < review.rating ? 'text-yellow-400' : 'text-gray-300'}" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24H14.81L12 2 9.19 9.24H2L7.46 13.97 5.82 21z"/>
                                </svg>
                            `).join('')}
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg review-text" style="flex: 1; overflow: hidden; text-overflow: ellipsis; white-space: normal;">
                        ${review.review}
                    </p>
                    <!-- Le lien "Lire plus" est conditionnel en fonction de la taille de l'écran -->
                    <a href="/tous-les-avis" class="text-blue-500 mt-2 block text-center mobile-only">Lire plus</a>
                </div>
            </div>
        `;
    }

    // Ajouter les 6 derniers avis au conteneur, du plus récent au plus ancien
    function displayRecentReviews() {
        const recentReviews = reviews.slice(-6).reverse(); // Prendre les 6 derniers avis et inverser l'ordre
        slidesContainer.innerHTML = recentReviews.map(createReviewHTML).join('');
        adjustCardHeights();
        toggleReadMoreLinks();
    }

    // Ajuster la hauteur des cartes pour qu'elles soient toutes égales
    function adjustCardHeights() {
        const slides = slidesContainer.querySelectorAll('.bg-white');
        let maxHeight = 0;

        // Trouver la hauteur maximale
        slides.forEach(slide => {
            slide.style.height = 'auto'; // Réinitialiser pour mesurer correctement
            maxHeight = Math.max(maxHeight, slide.offsetHeight);
        });

        // Appliquer la hauteur maximale à toutes les cartes
        slides.forEach(slide => {
            slide.style.height = `${maxHeight}px`;
        });

        // Réduire la hauteur des cartes sur smartphone
        if (window.innerWidth <= 768) { // Ajustez cette largeur pour définir les smartphones
            slides.forEach(slide => {
                slide.style.height = `${maxHeight / 2}px`;
            });
        }
    }

    // Afficher ou masquer les liens "Lire plus" en fonction de la taille de l'écran
    function toggleReadMoreLinks() {
        const readMoreLinks = slidesContainer.querySelectorAll('.mobile-only');
        if (window.innerWidth <= 768) {
            readMoreLinks.forEach(link => link.style.display = 'block');
        } else {
            readMoreLinks.forEach(link => link.style.display = 'none');
        }
    }

    displayRecentReviews();

    // Gestion du carousel
    const slides = Array.from(slidesContainer.children);
    const totalSlides = slides.length;
    const slideWidth = slides[0]?.offsetWidth || 0;
    let currentIndex = 0;
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    function updateCarousel() {
        if (currentIndex >= totalSlides) {
            slidesContainer.style.transition = 'none';
            currentIndex = 0; // Skip to the first slide
            slidesContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            requestAnimationFrame(() => {
                slidesContainer.style.transition = 'transform 0.5s ease-in-out';
            });
        } else if (currentIndex < 0) {
            slidesContainer.style.transition = 'none';
            currentIndex = totalSlides - 1; // Skip to the last slide
            slidesContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            requestAnimationFrame(() => {
                slidesContainer.style.transition = 'transform 0.5s ease-in-out';
            });
        } else {
            slidesContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }
    }

    nextBtn.addEventListener('click', function() {
        currentIndex++;
        updateCarousel();
    });

    prevBtn.addEventListener('click', function() {
        currentIndex--;
        updateCarousel();
    });

    // Optional: Auto-slide
    setInterval(function() {
        nextBtn.click();
    }, 6000); // Slide every 6 seconds

    // Réajuster la hauteur des cartes et les liens "Lire plus" au redimensionnement de la fenêtre
    window.addEventListener('resize', function() {
        adjustCardHeights();
        toggleReadMoreLinks();
    });
});
