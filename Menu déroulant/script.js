var lesMenus = document.getElementsByClassName("menu");
for (i = 0; i < lesMenus.length; i++)
    lesMenus[i].childNodes[0].addEventListener("click", MontrersousMenu);

function MontrersousMenu(e) {
    menu = e.target.parentNode;
    sousMenu = menu.getElementsByClassName("sousMenu")[0];
    if (sousMenu.style.display == "none") {
        CacherLesSousMenus();
        menu.style.borderTop = "solid 2px white"
        sousMenu.style.display = "flex";
    }
    else {
        menu.style.borderTop = ""
        sousMenu.style.display = "none";
    }
}
function CacherLesSousMenus() {
    lesSousMenus = document.getElementsByClassName("sousMenu");
    for (i = 0; i < lesMenus.length; i++) {
        lesSousMenus[i].style.display = "none";
    }
    for (i = 0; i < lesMenus.length; i++)
        lesMenus[i].style.border = "none";
}