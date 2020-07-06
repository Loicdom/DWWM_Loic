var lesMenus = document.getElementsByClassName("menu");
for (i=0;i<lesMenus.length;i++)
    lesMenus[i].childNodes[0].addEventListener("click",MontrersousMenu); // Pour montrer les sous menu quand on clique sur un des liens
document.getElementsByTagName("header")[0].addEventListener("click",CacherLesSousMenus); // pour cacher les sous menu

function MontrersousMenu(e){ // pour les montrer on fait un display flex pour les voir
    CacherLesSousMenus();
    menu = e.target.parentNode;
    menu.style.borderTop="solid 2px blue"
    submenu= menu.getElementsByClassName("sousMenu")[0];
    submenu.style.display="flex";

}
function CacherLesSousMenus(){ // pour les cacher : un display none pour les faire disparaitre
    lesSousMenus = document.getElementsByClassName("sousMenu");
    for(i=0;i<lesMenus.length;i++)
    {
        lesSousMenus[i].style.display="none";
    }
    for(i=0;i<lesMenus.length;i++)
    lesMenus[i].style.border="none";
}


var fornisseurCodeMaj = document.getElementById("codeFournisseur");
fornisseurCodeMaj.addEventListener("input", function () { CodeMAJ(); });
// fonction pour forcer les majuscules pour le code fournisseur
function CodeMAJ() {
    fornisseurCodeMaj.value=fornisseurCodeMaj.value.toUpperCase();
}