// remplissage des etoiles pour les avis utilisateurs
document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('#rating .star');
    const ratingInput = document.getElementById('rating-input');

    stars.forEach((star, index) => {
        star.addEventListener('mouseover', () => {
            stars.forEach((s, i) => {
                s.classList.toggle('text-yellow-400', i <= index);
                s.classList.toggle('fill-current', i <= index);
            });
        });

        star.addEventListener('mouseout', () => {
            stars.forEach((s) => {
                s.classList.remove('text-yellow-400');
                s.classList.remove('fill-current');
            });
            if (ratingInput.value) {
                stars.forEach((s, i) => {
                    s.classList.toggle('text-yellow-400', i < ratingInput.value);
                    s.classList.toggle('fill-current', i < ratingInput.value);
                });
            }
        });

        star.addEventListener('click', () => {
            ratingInput.value = index + 1;
            stars.forEach((s, i) => {
                s.classList.toggle('text-yellow-400', i < ratingInput.value);
                s.classList.toggle('fill-current', i < ratingInput.value);
            });
        });
    });
});

