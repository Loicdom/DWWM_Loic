var lesMenus = document.getElementsByClassName("menu");
for (i=0;i<lesMenus.length;i++)
    lesMenus[i].childNodes[0].addEventListener("click",MontrersousMenu);
document.getElementsByTagName("header")[0].addEventListener("click",CacherLesSousMenus);

function MontrersousMenu(e){
    CacherLesSousMenus();
    menu = e.target.parentNode;
    menu.style.borderTop="solid 2px blue"
    submenu= menu.getElementsByClassName("sousMenu")[0];
    submenu.style.display="flex";

}
function CacherLesSousMenus(){
    lesSousMenus = document.getElementsByClassName("sousMenu");
    for(i=0;i<lesMenus.length;i++)
    {
        lesSousMenus[i].style.display="none";
    }
    for(i=0;i<lesMenus.length;i++)
    lesMenus[i].style.border="none";
}

function verif(event) {
    var monInput = event.target;
    var imgVert = (monInput.parentNode).getElementsByClassName("boutonVert")[0];
    var imgRouge = (monInput.parentNode).getElementsByClassName("boutonRouge")[0];
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if (monInput.value == '') {
        // Champ vide => on affiche rien
        imgRouge.style.visibility = 'hidden';
        imgVert.style.visibility = 'hidden';
        message.innerHTML = "Champ manquant";
    } else if (!monInput.checkValidity()) {
        imgRouge.style.visibility = 'visible';
        imgVert.style.visibility = 'hidden';
        message.innerHTML = "Format incoorrect";
    } else // => si c'est valide
    {
        imgVert.style.visibility = 'visible';
        imgRouge.style.visibility = 'hidden';
        message.innerHTML = "";
    }
}

var nom = document.getElementById("nomPersonne");
nom.addEventListener("input", verif);
var prenom = document.getElementById("prenomPersonne");
prenom.addEventListener("input", verif);
var lieuNaiss = document.getElementById("lieuNaissPersonne");
lieuNaiss.addEventListener("input", verif);
var cp = document.getElementById("cpPersonne");
cp.addEventListener("input", verif);
var ville = document.getElementById("villePersonne");
ville.addEventListener("input", verif);
var mail = document.getElementById("emailPersonne");
mail.addEventListener("input", verif);
var tel = document.getElementById("telPersonne");
tel.addEventListener("input", verif);
var nomRepLegal = document.getElementById("nomRepresentantLegal");
nomRepLegal.addEventListener("input", verif);
var prenomRepLegal = document.getElementById("prenomRepresentantLegal");
prenomRepLegal.addEventListener("input", verif);
