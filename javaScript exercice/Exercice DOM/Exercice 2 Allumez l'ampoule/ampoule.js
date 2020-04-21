// ====> Exercice n°2 : changement d'image :

// On commence par définir les variables :
var ampoule = document.getElementById("ampoule");
var light = 0;

// on affiche l'ampoule et ou ajoute un évènement "click"
ampoule.innerHTML = "<img src='images/ampOff.png' alt='ampoule éteinte'>";
ampoule.addEventListener("click", lightOn);

function lightOn() {
    if (light == 0) {
        ampoule.innerHTML = "<img src='images/ampOn.png' alt='ampoule allumée'>";
        light = 1;
    }
    else {
        ampoule.innerHTML = "<img src='images/ampOff.png' alt='ampoule éteinte'>";
        light = 0;
    }
}
