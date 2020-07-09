var codeEvent = document.getElementById("codeEvenement");
codeEvent.addEventListener("input", function () { controllerCode(); });

function controllerCode() {

    var code = codeEvent.value;
    console.log(code);
    // on définit une requete
    const requ = new XMLHttpRequest();

    requ.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                // la requete a abouti et a fournit une reponse
                console.log("Réponse reçue: %s", this.responseText);
                var rep = 0;
                //on décode la réponse, pour obtenir un objet
                reponse = JSON.parse(this.responseText);
                var nbEntrer = reponse.length; // longeur du tableau reponse (reponse ajax)
                var i = 0;
                while (rep == 0 && i <= nbEntrer) {  //on fait une boucle qu'on arrête si il trouve le même code que celui dans l'input
                    if (reponse[i].codeEvenement === code) {
                        rep = 1; // si il trouve le même code
                    } else {
                        rep = 0; 
                    }
                    i++;
                }
                if (rep == 1) {
                    codeEvent.value = ""; // on vide l'input car code déjà pris
                    codeEvent.style.border = "2px red solid"; // border rouge et message pour prévenir l'utilisateur
                    alert("Code évènement déjà utilisé");
                } else {
                    // réponse quand le code est différent
                    console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
                }
            }
        }
    };
//on envoi la requête
    requ.open('GET', '/DWWM_Loïc/PROJET STAGE/PHP/MODEL/APICodeEvenements.php', true);
    requ.send();
}
