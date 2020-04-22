/*******************************************/
/*   Version 0                             */
/* Pas de JS, HTML appliquera les patterns */
/*******************************************/


/**************************************************/
/*   Version 1                                    */
/* Le JS applique les patterns sur perte du focus */
/**************************************************/

// // on recupere les input et on declenche les evnements pour faire les controles
// var lesInputs = document.getElementsByTagName('input');
// for (i = 0; i < lesInputs.length; i++)
//     lesInputs[i].addEventListener("blur", verif);
// // l'evenement input est declenché chaque fois qu'une touche est enfoncée , 
// // permet un controle plus dynamique que blur(perte de focus)

// function verif(event) {
//     // on recupere l'input sur lequel faire la verification
//     var monInput = event.target;
//     if (!monInput.checkValidity()) alert("erreur");
// }

/********************************************************/
/*   Version 2                                          */
/* Le JS applique les patterns à chaque appui de touche */
/********************************************************/

// // on recupere les input et on declenche les evnements pour faire les controles
// var lesInputs = document.getElementsByTagName('input');
// for (i = 0; i < lesInputs.length; i++)
//     lesInputs[i].addEventListener("input", verif);

// function verif(event) {
//     // on recupere l'input sur lequel faire la verification
//     var monInput = event.target;
//     if (!monInput.checkValidity()) alert("erreur");
// }


/***************************************************/
/*   Version 3                                     */
/* V2 + Contrôle qu'il n'y a pas d'erreur lors de  */
/*                         l'appui sur enregistrer */
/***************************************************/


// on recupere les input et on declenche les evnements pour faire les controles
var lesInputs = document.getElementsByTagName('input');
for (i = 0; i < lesInputs.length; i++)
    lesInputs[i].addEventListener("input", verif);
//on crée un tableau de gestion d'erreurs
//0 si le champ n'est pas correct, 1 sinon
//gestion par tableau associatif, plus facile pour la mise à jour
var erreurs = {
    "nom": 0,
    "postal": 0
}
ActiveValider();

function verif(event) {
    // on recupere l'input sur lequel faire la verification
    var monInput = event.target;
    if (!monInput.checkValidity()) {
        alert("erreur");
        erreurs[event.target.name] = 0;
    } else {
        erreurs[event.target.name] = 1;  
    }
    ActiveValider();
}

function ActiveValider() {
    document.getElementById('submit').disabled = false;
    for (var key in erreurs) {
        if (erreurs[key]==0)
        document.getElementById('submit').disabled =true;
    }
}