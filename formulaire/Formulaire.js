// function verifNom() {
//     if(!checkNom.test(nom.value)){
//         image.src="refuser.png";
//     } else {
//         image.src="Valider.png";
//     }
// }

// nom = document.getElementById('nom');
// image =document.getElementById('image');
// nom.addEventListener("input", verifNom);
// checkNom = new RegExp("^[A-ZÀ-Ý' ’-]{2,}$");

//Correction
// var nom = document.getElementById("nom");
// var confirmation =document.getElementById("confirmation");
// var imageNom=nom.parentNode.getElementsByTagName("img")[0];
// nom.addEventListener("input", verifNom);

// checkNom = new RegExp("[A-ZÀ-Ý' ’-]{2,}");

// function verifNom() {
//     if (checkNom.test(nom.value)) {
//         imageNom.src="valider.png";
//     } else {
//         imageNom.src="refuser.png";
//     }
// }

function verif(event) {
    var monInput = event.target;
    var imgVert = (monInput.parentNode).getElementsByClassName("boutonVert")[0];
    var imgRouge = (monInput.parentNode).getElementsByClassName("boutonRouge")[0];
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if (monInput.value == '') {
        // Champ vide => on affiche rien
        imgRouge.style.visibility = 'hidden';
        imgVert.style.visibility = 'hidden';
        message.innerHTML = "Champ manquant";
    } else if (!monInput.checkValidity()) {
        imgRouge.style.visibility = 'visible';
        imgVert.style.visibility = 'hidden';
        message.innerHTML = "Format incoorrect";
    } else // => si c'est valide
    {
        imgVert.style.visibility = 'visible';
        imgRouge.style.visibility = 'hidden';
        message.innerHTML = "";
    }
}

function afficheMdp()
{
    if (mdp.type==="password") {
        mdp.type = "text";
    } else {
        mdp.type = "password";
    }
}

function verifMdp(event) {
    var monInput = event.target;
    var imgVert = (monInput.parentNode).getElementsByClassName("boutonVert")[0];
    var imgRouge = (monInput.parentNode).getElementsByClassName("boutonRouge")[0];
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if (monInput.value == '') {
        
        imgRouge.style.visibility = 'hidden';
        imgVert.style.visibility = 'hidden';
        message.innerHTML = "Champ manquant";
    } else if (monInput.value === mdp.value) {
        imgVert.style.visibility = 'visible';
        imgRouge.style.visibility = 'hidden';
        message.innerHTML = "Format incoorrect";
    } else 
    {
        imgRouge.style.visibility = 'visible';
        imgVert.style.visibility = 'hidden';
        message.innerHTML = "";
    }
}

var nom = document.getElementById("nom");
nom.addEventListener("input", verif);
var prenom = document.getElementById("prenom");
prenom.addEventListener("input", verif);
var mail = document.getElementById("mail");
mail.addEventListener("input", verif);
var cp = document.getElementById("CP");
cp.addEventListener("input", verif);
var tel = document.getElementById("tel");
tel.addEventListener("input", verif);
var mdp = document.getElementById("mdp");
mdp.addEventListener("input", verif);
var confirmation = document.getElementById("confirm");
confirmation.addEventListener("input", verif);
var eye = document.getElementById("confirm");
eye.addEventListener("click", afficheMdp);


