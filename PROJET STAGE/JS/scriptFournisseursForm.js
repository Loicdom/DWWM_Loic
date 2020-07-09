//********************************************************** Fournisseur formulaire *****************************************************************
var fournisseurCodeMaj = document.getElementById("codeFournisseur"); // on récupère l'input du code fournisseur
fournisseurCodeMaj.addEventListener("input",CodeMAJ);
// fonction pour forcer les majuscules pour le code fournisseur
function CodeMAJ() {
    fournisseurCodeMaj.value=fournisseurCodeMaj.value.toUpperCase();
}

