const btn_add = document.getElementById("btn_add");
const contenuEcriture = document.getElementById("contenuEcriture");
const add_contenuEcriture = document.getElementById("add_contenuEcriture");

btn_add.addEventListener('click', function () {
    let nbre_add = Number(btn_add.dataset.nbre);
    let nbre_max = Number(btn_add.dataset.max);
    if (nbre_add < nbre_max) {
        btn_add.dataset.nbre = Number(btn_add.dataset.nbre) + 1;

        // on clone le div modele
        let form_input_clone = contenuEcriture.cloneNode(true);
        form_input_clone.removeAttribute('id'); // on supprime l attribut id du clone (car un id est unique)

        // bouton de suppression de la ligne
        let button = document.createElement("button");
        button.type = "button";
        button.classList.add("btn_ecriture1");
        button.textContent = "-";

        var numCompteVide = document.getElementsByName("numCompte[]");
        var aVider = numCompteVide[1];
        aVider.value = "";

        var classeComptable = document.getElementById('classComptable');
        if (classeComptable != null) {
            button.classList.add("btn_ecriture2");
        }

        button.addEventListener( // le bouton "-" supprime tout le div
            "click", function (e) {
                add_contenuEcriture.removeChild(e.target.parentElement);
                e.preventDefault();
                btn_add.dataset.nbre = Number(btn_add.dataset.nbre) - 1;
                btn_add.style.display = 'block';
            }
        );

        form_input_clone.appendChild(button);
        add_contenuEcriture.appendChild(form_input_clone);

        // nombre maxi atteint
        if (nbre_add == nbre_max - 1) {
            btn_add.style.display = 'none';
        }

        var btn_supp = document.getElementsByName('btn_ecriture[]');
        for (i = 1; i < btn_supp.length; i++) {
            var echange = btn_supp[i];
            console.log(echange);
            echange.style.display = 'none';
        }

        btn_pour_affichage = document.getElementById('btn_affichageCompte');
        btn_pour_affichage.innerHTML = " <button class='btn_ecriture' id='affichage_compte' name='btn_ecriture[]'>Ajouter les numéro des comptes</button>";
        lancementAffichageCompte = document.getElementById('affichage_compte');
        if (lancementAffichageCompte) {
            lancementAffichageCompte.addEventListener('click', lancement);
        }
        dateComplet = document.getElementsByName('dateEcriture[]');
        tailleInput = dateComplet.length;
        input = document.getElementsByName('credit[]');
        dernierCredit = input[tailleInput - 1];
        dernierCredit.addEventListener("input", verifDebitCredit);
    }
});


function lancement() {
    inputNumcompte = document.getElementsByName('numCompte[]');
    tailleInputNumCompte = inputNumcompte.length;
    for (i = 1; i < tailleInputNumCompte; i++) {
        libelleCompteSelect = document.getElementsByName('libelleCompte[]');
        inputNumcompte = document.getElementsByName('numCompte[]');
        inputNumcompte = inputNumcompte[i];
        libelleCompteSelect = libelleCompteSelect[i];
        affichageNumCompte(inputNumcompte, libelleCompteSelect);
    }
}

function affichageNumCompte(Numcompte, libelleCompte) {
    var choix = libelleCompte.options[libelleCompte.selectedIndex].text;
    if (choix != "Libellé du compte") {
        Numcompte.value = libelleCompte.options[libelleCompte.selectedIndex].value;
    }
}
