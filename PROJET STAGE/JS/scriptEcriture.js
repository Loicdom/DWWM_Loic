var choixCodeEvent = document.getElementsByClassName("select_ecriture_event")[0];
// for (i = 0; i < choixCodeEvent.length; i++) {
choixCodeEvent.addEventListener("change", function () { compteParCode(); });
// }
function compteParCode() {

    var choixEvent = choixCodeEvent.options[choixCodeEvent.selectedIndex].text;
    // on définit une requete
    const requ = new XMLHttpRequest();

    requ.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                // la requete a abouti et a fournit une reponse
                console.log("Réponse reçue: %s", this.responseText);
                //on décode la réponse, pour obtenir un objet
                reponse = this.responseText;
                console.log(reponse);
                libelleCompte = document.getElementsByClassName('select_ecriture_compteEvent')[0];
                libelleCompteValue = document.getElementsByClassName('select_ecriture_compteEvent')[0].value;
                //on vide les anciens elements
                nbEntree = libelleCompte.length; 
                for (let i=0;i<nbEntree;i++) 
                libelleCompte.remove(0);
                //on boucle sur la reponse
                for (i = 0; i < reponse.length; i++) {
                    var option = document.createElement("option");
                    option.text=reponse[i].libelleCompte;
                    option.value=reponse[i].numCompte;
                    console.log(reponse[i].libelleCompte);
                    libelleCompte.add(option);
                }
            } else {
                // réponse quand le code est différent
                console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
            }

        }
    };
    //on envoi la requête
    requ.open('POST', '/DWWM_Loïc/PROJET STAGE/PHP/MODEL/APISelectEcritureEvenements.php', true);
    var choix = choixCodeEvent.options[choixCodeEvent.selectedIndex].text;
    requ.send("choixCode=" + choix);
}
