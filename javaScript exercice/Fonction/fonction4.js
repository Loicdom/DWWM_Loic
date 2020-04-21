function nbreVoyelles(phrase) {
    var compteur = 0;
    for (var i = 0; i < phrase.length; i++) {
        if (phrase[i] == "a" || phrase[i] == "e" || phrase[i] == "i" || phrase[i] == "o" || phrase[i] == "u" || phrase[i] == "y")
            compteur++;
    }
    return compteur;
}
phrase = prompt("Entrer une phrase :");
alert("Le nombre de voyelles dans cette phrase est de : " + nbreVoyelles(phrase));