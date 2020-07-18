var choixCodeFour = document.getElementById("codeFour");
choixCodeFour.addEventListener("change", function () { compteParCodeF(); });

function compteParCodeF() {

    // on définit une requete
    const requ = new XMLHttpRequest();

    requ.onreadystatechange = function (event) {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {
                // la requete a abouti et a fournit une reponse
                console.log("Réponse reçue: %s", this.responseText);
                //on décode la réponse, pour obtenir un objet
                reponse = JSON.parse(this.responseText);
                console.log(reponse);
                libelleCompte = document.getElementById('libelleCompteF');
                //on vide les anciens elements
                nbEntree = libelleCompte.length;
                for (let i = 0; i < nbEntree; i++)
                    libelleCompte.remove(0);
                //on boucle sur la reponse
                for (i = 0; i < reponse.length; i++) {
                    var option = document.createElement("option");
                    option.text = reponse[i].libelleCompte;
                    option.value = reponse[i].numCompte;
                    console.log(reponse[i].libelleCompte);
                    libelleCompte.add(option);
                }
                inputNumcompte = document.getElementById('numCompteF');
                ChoixCodeFourni = document.getElementById('codeFour');
                libelleCpte = document.getElementById('libelleCompteF');
                affichageCompteF(inputNumcompte, libelleCpte);

            } else {
                // réponse quand le code est différent
                console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
            }

        }
    };
    //on envoi la requête
    requ.open('POST', '/DWWM_Loïc/PROJET STAGE/PHP/MODEL/APISelectEcritureFournisseurs.php', true);
    requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var choix = choixCodeFour.options[choixCodeFour.selectedIndex].text;
    var args = "choixCode=" + choix;
    requ.send(args);
}

function affichageCompteF(Numcompte, libelleCompte) {
    var choix = libelleCompte.options[libelleCompte.selectedIndex].text;
    if (choix != "Libellé du compte") {
        Numcompte.value = libelleCompte.options[libelleCompte.selectedIndex].value;
    }
}
