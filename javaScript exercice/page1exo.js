var reponse1 = window.prompt("Saisissez votre nom");
var reponse2 = window.prompt("Saisissez votre prenom");
var reponse3 = prompt("Vous etes un homme ou une femme (f/m)");
if(reponse3=="f"){
    rep="Madamme";
} else {
    rep="Monsieur";
}
console.log("Bomjour"+" "+rep+" "+reponse1+" "+reponse2+"\nBienvenue sur notre site web !");