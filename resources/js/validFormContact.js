document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function (event) {
        // Effacer les messages d'erreur précédents
        clearErrors();

        let isValid = true;

        // Validation du champ Nom
        const nom = document.getElementById('nom').value.trim();
        if (!nom || nom.length > 255) {
            showError('nomError', 'Le nom est requis et ne doit pas dépasser 255 caractères.');
            isValid = false;
        }

        // Validation du champ Prénom
        const prenom = document.getElementById('prenom').value.trim();
        if (!prenom || prenom.length > 255) {
            showError('prenomError', 'Le prénom est requis et ne doit pas dépasser 255 caractères.');
            isValid = false;
        }

        // Validation du champ Email
        const email = document.getElementById('email').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email || !emailPattern.test(email)) {
            showError('emailError', 'Veuillez entrer un email valide.');
            isValid = false;
        }

        // Validation du champ Téléphone
        const telephone = document.getElementById('telephone').value.trim();
        if (!telephone || telephone.length > 20) {
            showError('telephoneError', 'Le numéro de téléphone est requis et ne doit pas dépasser 20 caractères.');
            isValid = false;
        }

        // Validation du champ Message
        const message = document.getElementById('message').value.trim();
        if (!message) {
            showError('messageError', 'Le message est requis.');
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
        const errorElement = document.getElementById(id);
        if (errorElement) {
            errorElement.textContent = message;
        }
    }

    function clearErrors() {
        const errorElements = document.querySelectorAll('span[id$="Error"]');
        errorElements.forEach(el => el.textContent = '');
    }
});
