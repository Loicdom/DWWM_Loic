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
    nomPersonne.value=nomPersonne.value.toUpperCase();
}

var villeSeletec = document.getElementById("villeSelected").value; // on récupère l'idClasseComptable dans la value de l'input
document.getElementById("idVille").selectedIndex = villeSeletec-1; // -1 car index commence à 0
// On recupère le select et ses options et on selectionne la bonne classe en fonction de l'idclasseComptable
