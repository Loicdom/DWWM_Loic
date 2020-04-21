var cartes = ["carte1.png","carte2.png","carte3.png","carte4.png","carte5.png","carte6.png","carte7.png","carte8.png","carte1.png","carte2.png","carte3.png","carte4.png","carte5.png","carte6.png","carte7.png","carte8.png"];

function melangecartes(cartes) {
    for (i=0; i<cartes.length-1; i++) {
        var m1 = Math.floor(Math.random()*(cartes.length))
        var m2 = Math.floor(Math.random()*(cartes.length))
        temp = cartes[m1];
        cartes[m1] = cartes[m2];
        cartes[m2] = temp;
    }
}

//Cartes de jeu
var cartes = document.getElementsByClassName("carte"); //Cartes

//Pour chaque carte ajouter l'evenement retourner carte
for (let i = 0; i < cartes.length; i++) {
    ajouterEventCarte(cartes[i]);
}

//Ajoute l'evenement retourner carte
function ajouterEventCarte(carte) {

    //Lorsque l'on clique sur la carte
    carte.addEventListener("click", function () {

        //Recuperer la cible du clique (la carte)
        var target = event.target;

        //Si elle ne possede pas la classe  "flip"
        if (!target.classList.contains("flip")) {
            target.classList.add("flip");

            //Attendre 200 millisecondes
            setTimeout(function () {

                let imgCarte = target.getAttribute('data-image');
                target.src = imgCarte;

            }, 200);

        }

        //Attendre 2 seconde et retourner la carte
        setTimeout(function () {

            //Retirer la classe "flip"
            target.classList.remove("flip"); 

            setTimeout(function () {
                target.src = "fondcarte.png";
            }, 200);

        }, 2000);

    })
}
