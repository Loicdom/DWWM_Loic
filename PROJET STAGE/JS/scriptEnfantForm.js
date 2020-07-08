//********************************************************** Enfant formulaire *****************************************************************
var nomPersonne = document.getElementById("nomPersonne"); // on récupère l'input du code fournisseur

nomPersonne.addEventListener("input",NomMAJ);
// fonction pour forcer les majuscules pour le nom enfant
function NomMAJ() {
    nomPersonne.value=nomPersonne.value.toUpperCase();
}

var nomRepresentantLegal = document.getElementById("nomRepresentantLegal"); // on récupère l'input du code fournisseur
nomRepresentantLegal.addEventListener("input",NomRMAJ);

function NomRMAJ() {
    nomRepresentantLegal.value=nomRepresentantLegal.value.toUpperCase();
}
