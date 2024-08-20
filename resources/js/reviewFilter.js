
document.addEventListener('DOMContentLoaded', function() {
    // Récupérer les données des avis
    const reviews = window.reviewsData;
    const fixedHeight = 200; // Hauteur fixe en pixels, ajustez selon vos besoins

    // Sélectionner les éléments du DOM
    const reviewsContainer = document.getElementById('reviewsContainer');
    const ratingFilter = document.getElementById('category-select');

    // Fonction pour trier les avis par date (du plus récent au plus ancien)
    function sortReviewsByDate(reviews) {
        return reviews.slice().sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
    }

    // Fonction pour afficher les avis
    function displayReviews(filteredReviews) {
        const sortedReviews = sortReviewsByDate(filteredReviews);
        reviewsContainer.innerHTML = sortedReviews.map(review => `
            <div class="review-item w-full lg:px-4 mb-4" style="box-sizing: border-box;">
                <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4" style="display: flex; flex-direction: column; height: ${fixedHeight}px; box-sizing: border-box; overflow: auto;">
                    <p class="text-gray-600 text-sm mb-2" style="margin: 0;">Le: ${new Date(review.created_at).toLocaleDateString('fr-FR')}</p>
                    <div class="flex items-center mb-2">   
                        <h2 class="text-xl font-bold mr-2 text-sky-700">${review.name}</h2>
                        <div class="flex">
                            ${Array.from({ length: 5 }, (_, i) => `
                                <svg class="w-5 h-5 ${i < review.rating ? 'text-yellow-400' : 'text-gray-300'}" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24H14.81L12 2 9.19 9.24H2L7.46 13.97 5.82 21z"/>
                                </svg>
                            `).join('')}
                        </div>
                    </div>
                    <p class="text-gray-600" style="flex: 1; overflow: auto; margin: 0; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; text-overflow: ellipsis; white-space: normal;">
                        ${review.review}
                    </p>
                </div>
            </div>
        `).join('');
    }

    // Afficher tous les avis au chargement initial
    displayReviews(reviews);

    // Filtrer les avis lorsque la sélection change
    ratingFilter.addEventListener('change', function() {
        const selectedRating = parseInt(this.value, 10);

        const filteredReviews = reviews.filter(review => 
            isNaN(selectedRating) || review.rating === selectedRating
        );

        displayReviews(filteredReviews);
    });
});


