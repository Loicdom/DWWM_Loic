function Remise() {
    var pu = prompt("Prix unitaire du produit :");
    var qte = prompt("Quantité :");
    var somme =  pu * qte;
    console.log (somme);
    var port = somme * 0.2;
    if (port < 6) {
        port = 6;
    }
    var resultat;

    if (somme > 499) {
        resultat = somme - (somme * (10 / 100));
    } else if (somme > 200) {
        resultat = somme - (somme * (10 / 100)) + port;

    } else if (somme > 100) {
        resultat = somme - (somme * (5 / 100)) + port;
    } else {
        resultat = somme + port;
    }
    alert("Prix total : " + resultat);

}

Remise();
