
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        // Récupérer les valeurs des champs
        var nom = document.getElementById("nom").value;
        var prenom = document.getElementById("prenom").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        // Vérifier si les champs sont vides
        if (nom === "" || prenom === "" || email === "" || message === "") {
            document.getElementById("errorMessage").innerHTML = "Tous les champs doivent être remplis.";
            event.preventDefault(); // Empêcher la soumission du formulaire
            return;
        }

        // Vérifier si l'email est valide
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById("errorMessage").innerHTML = "Veuillez saisir une adresse e-mail valide.";
            event.preventDefault(); // Empêcher la soumission du formulaire
            return;
        }

        // Réinitialiser le message d'erreur
        document.getElementById("errorMessage").innerHTML = "";
    });

