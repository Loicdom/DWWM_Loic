// on recupere le body
var body = document.getElementsByTagName("body")[0];
// var changeCouleur = document.getElementById("couleur");

// on récupère tous les inputs
var inputs = document.querySelectorAll("input");

// on récupère tous les boutons en appelant directement la fonction si l'évènement se produit
document.getElementById("btnRouge").addEventListener("click", function(){changerCouleur(255,0,0)});
document.getElementById("btnVert").addEventListener("click", function(){changerCouleur(0,255,0)});
document.getElementById("btnBleu").addEventListener("click", function(){changerCouleur(0,0,255)});

// on lit le cookie et on l'associe à la variable couleurs
var couleurs = readCookie("couleurActuelle");

if(couleurs != null)
{
    tabCouleurs = couleurs.split(","); // on récupère chaque couleur pour les entrer dans changerCouleur()
    changerCouleur(tabCouleurs[0], tabCouleurs[1], tabCouleurs[2]);
}

// on ajoute un écouteur à chaque input -> qui appelera la fonction
for(let i=0; i<3; i++)
{
    inputs[i].addEventListener("change", function(){
        if(inputs[i].value > 255)
        {
            inputs[i].value = 255;
        }
        changerCouleur(parseInt(inputs[0].value), parseInt(inputs[1].value), parseInt(inputs[2].value))});
}

// fonction qui changera la couleur du body
function changerCouleur(rouge, vert, bleu)
{
    // on modifie le cookie en utilisant la fonction createCookie
    createCookie("couleurActuelle", rouge+","+vert+","+bleu, 3);
    // test
    // alert("la couleur est: "+readCookie("couleurActuelle"));

    // on associe la couleur entrée en paramètre au body 
    body.style.backgroundColor = "rgb("+rouge+", "+vert+", "+bleu+")";

    inputs[0].value = rouge;
    inputs[1].value = vert;
    inputs[2].value = bleu;
    
}


//fonctionne mais sans les cookies

// var rouge = document.getElementById("btnRouge");
// rouge.addEventListener("click", function () {
//     document.body.style.backgroundColor = "red";
// })

// var vert = document.getElementById("btnVert");
// vert.addEventListener("click", function () {
//     document.body.style.backgroundColor = "green";
// })

// var bleu = document.getElementById("btnBleu");
// bleu.addEventListener("click", function () {
//     document.body.style.backgroundColor = "blue";
// })

// changeCouleur.addEventListener("click", function () {
//     AffichageCouleur();
// })

// function AffichageCouleur() {
//     var red = document.getElementById("rouge").value;
//     var green = document.getElementById("vert").value;
//     var blue = document.getElementById("bleu").value;
//     if(blue<256 && green<256 && red<256){
//         document.body.style.backgroundColor='rgb(' + red + ', ' + green + ', ' + blue + ')';
//     } else {
//         alert("code RGB invalide");
//     }
// }

