function verif(event) {
    var monInput = event.target; // On récupère a chaque fois l'input où l'événement est déclancher
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if (monInput.value == '') {
        // Champ vide, on affiche un message "champ manquant"
        message.innerHTML = "Champ manquant";
    } else if (!monInput.checkValidity()) {
        // si le champ n'est pas valide on affiche un message
        message.innerHTML = "Format incorect";
    } else // => si c'est valide on affiche valide
    {
        message.innerHTML = "Valide";
    }
}

function calcul() {
    var capital = document.getElementById("capital");
    var taux = document.getElementById("taux");
    var duree = document.getElementById("duree");
    var mensualite = document.getElementById("mensualite"); // on récupere input mensualité
    var cout = document.getElementById("cout"); // on récupère input cout
    var nbMois = duree.value * 12; // calcul du nombre de mois
    var calculMensulalite = (capital.value * taux.value / 12) / (1 - Math.pow(1 + taux.value / 12, -nbMois))
    mensualite.value = calculMensulalite;
    cout.value = calculMensulalite * nbMois;
}

// On récupère les inputs gràce à leurs id 
// et on leurs mets un événement pour vérifier si ce qu'il est entrer est conforme (ici nombre et on refuse les lettres par exemple)
var capital = document.getElementById("capital"); // on récupere input capital
capital.addEventListener("input", verif); // on déclenche evénement pour vérif
capital.addEventListener("change", calcul); // on déclenche evénement pour le calcul mensualité
var taux = document.getElementById("taux");
taux.addEventListener("input", function () {
    if (taux.value > 100) { // on empêche de dépasser 100 car c'est un poucentage
        taux.value = 1; // si on dépasse 100, on remet 1%
    }
});
taux.addEventListener("input", verif);
taux.addEventListener("change", calcul);
var duree = document.getElementById("duree");
duree.addEventListener("input", verif);
duree.addEventListener("change", calcul);

var boutonCaculer = document.getElementById("calculer");
boutonCaculer.addEventListener("click", calcul);

