var dateDeNaissance=prompt("Veuillez saisir votre année de naissance :");
var calculAge=(new Date().getFullYear()-dateDeNaissance);
// .getFullYear()
// Renvoie l'année (avec 4 chiffres pour une année à 4 chiffres) pour la date spécifiée selon l'heure locale.
if(calculAge>17){
    alert("Vous avez "+calculAge+" ans. Vous êtes donc majeur");
} else {
    alert("Vous avez "+calculAge+" ans. Vous êtes donc mineur");
}