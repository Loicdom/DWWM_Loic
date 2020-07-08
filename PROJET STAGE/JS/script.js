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

var classeComptableSeletec = document.getElementById("idClasseComptableSelected").value; // on récupère l'idClasseComptable dans la value de l'input
document.getElementById("idClasseComptable").selectedIndex = classeComptableSeletec-1; // -1 car index commence à 0
// On recupère le select et ses options et on selectionne la bonne classe en fonction de l'idclasseComptable
