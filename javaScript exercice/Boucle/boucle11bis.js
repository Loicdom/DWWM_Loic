// ===> Nombre magique inversé

// on pense à un chiffre et l'ordi doit le deviner
var nb = null; // le numéro que l'ordi va proposer
var limiteMax = 100; // la limite max de recherche
var limiteMin = 1; // la limite min de recherche

do { // la boucle de jeu
   nb = parseInt(Math.random() * (limiteMax - limiteMin) + limiteMin); // L'ordinateur choisit un nb aléatoire entre le min et le max
   alert("l'ordinateur propose " + nb);
   console.log("l'ordinateur propose " + nb);

   choix = prompt("plus petit (-), plus grand (+) ou correct (*) ?");

   if (choix == "+") { // si la réponse est plus grande alors on change limiteMin par le nb choisi par l'ordi
      limiteMin = nb;
   }
   else if (choix == "-") { // même chose mais avec le max si le nombre est plus petit
      limiteMax = nb;
   }

   console.log("L'ordinateur va chercher entre " + limiteMin + " et " + limiteMax);
} while (choix != "*");

alert("L'ordinateur a trouvé le bon numéro !");
