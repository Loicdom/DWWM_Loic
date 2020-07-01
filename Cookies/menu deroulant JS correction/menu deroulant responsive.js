var lesMenus = document.getElementsByClassName("menu");
for (i=0;i<lesMenus.length;i++)
    lesMenus[i].childNodes[0].addEventListener("click",MontrersousMenu);
document.getElementsByTagName("section")[0].addEventListener("click",CacherLesSousMenus);

function MontrersousMenu(e){
    CacherLesSousMenus();
    menu = e.target.parentNode;
    menu.style.borderTop="solid 2px orange"
    submenu= menu.getElementsByClassName("submenu")[0];
    submenu.style.display="flex";

}
function CacherLesSousMenus(){
    lesSousMenus = document.getElementsByClassName("submenu");
    for(i=0;i<lesMenus.length;i++)
    {
        lesSousMenus[i].style.display="none";
    }
    for(i=0;i<lesMenus.length;i++)
    lesMenus[i].style.border="none";
}