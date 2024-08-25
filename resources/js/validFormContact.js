document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function (event) {
        // Effacer les messages d'erreur précédents
        clearErrors();

        let isValid = true;

        // Validation du champ Nom
        const nom = document.getElementById('nom').value.trim();
        if (nom.length < 2 || nom.length > 50) {
            showError('nomError', 'Le nom doit comporter entre 2 et 50 caractères.');
            isValid = false;
        }

        // Validation du champ Prénom
        const prenom = document.getElementById('prenom').value.trim();
        if (prenom.length < 2 || prenom.length > 50) {
            showError('prenomError', 'Le prénom doit comporter entre 2 et 50 caractères.');
            isValid = false;
        }

        // Validation du champ Email
        const email = document.getElementById('email').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        if (!email || !emailPattern.test(email)) {
            showError('emailError', 'Veuillez entrer un email valide.');
            isValid = false;
        }

        // Validation du champ Téléphone
        const telephone = document.getElementById('telephone').value.trim();

        // Vérifiez si le champ est vide, si sa longueur n'est pas égale à 10, ou s'il contient autre chose que des chiffres
        if (!/^\d{10}$/.test(telephone)) {
            showError('telephoneError', 'Le numéro de téléphone est requis et doit contenir exactement 10 chiffres.');
            isValid = false;
        }

        // Validation du champ Message
        const message = document.getElementById('message').value.trim();
        if (message.length < 10 || message.length > 500) {
            showError('messageError', 'Le message doit comporter entre 10 et 500 caractères.');
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
