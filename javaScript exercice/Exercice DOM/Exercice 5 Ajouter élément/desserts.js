// Code Martine :
// var ajoutBtnElt = document.querySelector("button");
// // Ajout d'un gestionnaire pour l'événement click
// ajoutBtnElt.addEventListener("click", ajoutDessert);
// function modifieDessert(e)
// {
//     e.target.textContent = prompt("quel dessert",e.target.textContent);
// }
// function ajoutDessert (){
//     var nouvLi = document.createElement("li");
//     nouvLi.textContent = prompt("quel dessert");
//     nouvLi.addEventListener("click", modifieDessert );
//     document.getElementById("liste").appendChild(nouvLi);
// }

// ===> Pour ajouter un élément à la variable "liste"
function ajoutDessert(nom) {
    if (nom != "") {
        liste.innerHTML += "<li>" + nom + "</li>";
        evenSuppression();
    }
}

// ===> Pour supprimer un élément à la variable "liste"
function supprimerDessert(e) {
    liste = document.getElementById("liste");
    liste.removeChild(e.target);
}

// ===> vérifie les changements de liste à chaque appel et ajoute un évênement "click"
// qui appelle la fonction de suppression
function evenSuppression() {
    var eltListe = document.getElementsByTagName("li");

    for (let i = 0; i< eltListe.length; i++) {
        eltListe[i].addEventListener("click", supprimerDessert);
    }
}

// ===> on déclare la variable "liste"
var liste = document.getElementById("liste");

// appel du prompt quand on clique sur "ajout"
document.getElementById("ajout").addEventListener("click", function () {
    ajoutDessert(prompt("Quel dessert voulez-vous ajouter ?"));
});

// on met à jour la liste et les listeners
evenSuppression();