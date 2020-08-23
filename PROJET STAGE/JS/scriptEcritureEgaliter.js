var dateEcriture = document.getElementById('dateEcriture');
var libelleEcriture = document.getElementById('libelleEcriture');
var btnAjoutLigne = document.getElementById('btn_add');
var btnFormulaire = document.getElementById('submit');
btnAjoutLigne.disabled = true;
btnFormulaire.disabled = true;
var inputDernierCredit = document.getElementById('dernierCredit');

dateEcriture.addEventListener("input", verifPlus);
libelleEcriture.addEventListener("input", verifPlus);
inputDernierCredit.addEventListener("input", verifDebitCredit);

function verifPlus() {
    dateEcriture = document.getElementById('dateEcriture');
    libelleEcriture = document.getElementById('libelleEcriture');
    btnAjoutLigne = document.getElementById('btn_add');
    dateComplet = document.getElementsByName('dateEcriture[]');
    tousLibelle = document.getElementsByName('libelleEcriture[]');
    tailleInputDate = dateComplet.length;
    if (dateEcriture.value != '' && libelleEcriture.value != '') {
        btnAjoutLigne.disabled = false;
        for (i = 1; i < tailleInputDate; i++) {
            dateComplet[i].value = dateEcriture.value;
            tousLibelle[i].value = libelleEcriture.value;
        }
    } else {
        btnAjoutLigne.disabled = true;
    }
}

function verifDebitCredit() { // pour vérifier si le débit et crédit sont égaux
    var montantsDebit = document.getElementsByName('debit[]');
        btnFormulaire = document.getElementById('submit');
    var tailleInput = montantsDebit.length;
    var sommeDebit = 0;
    var sommeCredit = 0;
    for (i = 0; i < tailleInput; i++) {
        montantsDebit = document.getElementsByName('debit[]'); // on recupere le débit et crédit
        montantsCredit = document.getElementsByName('credit[]');
        montantsDebit = montantsDebit[i];
        montantsCredit = montantsCredit[i];
        if(montantsDebit.value != '') { // Si il y a un montant au débit on l'ajoute a la sommeDébit
            sommeDebit = parseFloat(sommeDebit) + parseFloat(montantsDebit.valueAsNumber); 
            sommeDebit = sommeDebit.toFixed(2); // pour qu'il prenne en compte 2 chiffres après la virgule
        }
        if(montantsCredit.value != '') {
            sommeCredit = parseFloat(sommeCredit) + parseFloat(montantsCredit.valueAsNumber);
            sommeCredit = sommeCredit.toFixed(2);
        }
    }
    if (sommeDebit == sommeCredit) {
        btnFormulaire.disabled = false;
    } else {
        btnFormulaire.disabled = true; // si le crédit = débit on remet le bouton en marche
    }
}
