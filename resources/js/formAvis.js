document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form'); // On cible le formulaire avec le selecteur générique car le formulaire n'a pas d'id

    form.addEventListener('submit', function (event) {
        // Effacer les messages d'erreur précédents
        clearErrors();

        let isValid = true;

        // Validation du champ Prénom
        const name = document.getElementById('name').value.trim();
        if (name.length < 2 || name.length > 50) {
            showError('nameError', 'Le prénom doit comporter entre 2 et 50 caractères.');
            isValid = false;
        }

        // Validation du champ Email
        const email = document.getElementById('email').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email || !emailPattern.test(email)) {
            showError('emailError', 'Veuillez entrer un email valide.');
            isValid = false;
        }

        // Validation du champ Avis
        const review = document.getElementById('review').value.trim();
        if (review.length < 10 || review.length > 500) {
            showError('reviewError', "L'avis doit comporter entre 10 et 500 caractères.");
            isValid = false;
        }

        // Validation du champ Note
        const rating = document.getElementById('rating-input').value;
        if (rating < 1 || rating > 5) {
            showError('ratingError', 'La note doit être comprise entre 1 et 5.');
            isValid = false;
        }

        // Validation du champ RGPD
        const rgpd = document.getElementById('rgpd').checked;
        if (!rgpd) {
            showError('rgpdError', 'Vous devez accepter la politique de confidentialité.');
            isValid = false;
        }

        // Validation du champ Honeypot
        const honeypot = document.getElementById('honeypot').value.trim();
        if (honeypot) {
            // Champ honeypot doit être vide
            isValid = false;
        }

        // Si le formulaire n'est pas valide, empêcher la soumission
        if (!isValid) {
            event.preventDefault();
        }
    });

    function showError(id, message) {
        let errorElement = document.getElementById(id);
        if (!errorElement) {
            // Si l'élément d'erreur n'existe pas encore, on le crée
            errorElement = document.createElement('span');
            errorElement.id = id;
            errorElement.classList.add('text-red-500', 'text-sm');
            const field = document.querySelector(`[for="${id.replace('Error', '')}"]`);
            if (field) {
                field.insertAdjacentElement('afterend', errorElement);
            }
        }
        errorElement.textContent = message;
    }

    function clearErrors() {
        const errorElements = document.querySelectorAll('span[id$="Error"]');
        errorElements.forEach(el => el.textContent = '');
    }
});
