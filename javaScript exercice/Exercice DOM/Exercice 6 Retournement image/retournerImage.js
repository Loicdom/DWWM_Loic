function retourne(elt, recto) {
    id = elt.id; // on recupere l'id de l'image
    // on construit le nom de la nouvelle image
    if (recto) nomImage = "images/" + id + "V.jpg";
    else nomImage = "images/" + id + "R.jpg";
    elt.src = nomImage;
}
var images = document.getElementsByTagName("img"); //on recupere toutes les images
for (let i = 0; i < images.length; i++) {
    images[i].addEventListener("mouseover", function() {
        retourne(images[i], true); // on lance la méthode retourne,
        //on lui envoi l'image sur laquelle la souris passe 
        // true permet de savoir si on passe du recto au verso ou inversement 
    });
    images[i].addEventListener("mouseout", function() { retourne(images[i], false) });
}



// 2éme méthode :


// // on définit nos variables
// var card = document.getElementById("card");
// var side = 0; // 0 = recto, 1 = verso

// // on affiche notre carte et on ajoute un évènement 'click'
// card.innerHTML = "<img src='images/cardOff.png' alt=''>";
// card.addEventListener("click", turnOver);

// // retourne la carte selon le côté
// function turnOver() {
//     if (side == 0) {
//         card.innerHTML = "<img src='images/cardOn.png' alt=''>";
//         side = 1;

//         // appelle turnBack au bout de 3sec
//         setTimeout(turnBack, 3000);
//     }
//     else {
//         card.innerHTML = "<img src='images/cardOff.png' alt=''>";
//         side = 0;
//     }
// }

// // retourne la carte sur le côté original
// function turnBack() {
//     if (side == 1) {
//         card.innerHTML = "<img src='images/cardOff.png' alt=''>";
//         side = 0;
//     }
// }