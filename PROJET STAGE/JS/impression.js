var impression_enfant = document.getElementById("btn1"); // on récupère le bouton
impression_enfant.addEventListener("click",imprimer_page);

function imprimer_page(){
    var impression_retour = document.getElementById("btnRetour");
    impression_retour.style.display = "none";
    impression_enfant.style.display = "none";
    window.print();
    impression_retour.style.display = "block";
    impression_enfant.style.display = "block";
}
