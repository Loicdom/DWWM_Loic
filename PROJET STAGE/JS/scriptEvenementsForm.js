//********************************************************** Fournisseur formulaire *****************************************************************
var evenementCodeMaj = document.getElementById("codeEvenement"); // on récupère l'input du code evenement
evenementCodeMaj.addEventListener("input",CodeMAJ);
// fonction pour forcer les majuscules pour le code evenement
function CodeMAJ() {
    evenementCodeMaj.value=evenementCodeMaj.value.toUpperCase();
}

