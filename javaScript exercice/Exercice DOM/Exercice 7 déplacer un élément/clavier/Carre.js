function deplace(dleft, dtop) {
    // permet de déplacer le calque (carre) selon 2 direction left et top 
    // on récupère le carré rouge
    var calque = document.getElementById('carre');
    // on récupère son style (tous le CSS)
    var styleCalque = window.getComputedStyle(calque, null);
    // on récupère les positions left et top actuelles
    var topActuel = styleCalque.top;
    var leftActuel = styleCalque.left;
    // on modifie les positions left et top actuelles
    calque.style.top = parseInt(topActuel) + dtop + 'px';
    calque.style.left = parseInt(leftActuel) + dleft + 'px';
}

document.addEventListener("keydown", function (event) {
    // Pour la compatibilité avec tous les navigateurs :
    var event = event || window.event, keyCode = event.keyCode;

    // On détecte l'événement puis selon la fleche, on appelle la function déplace
    switch (keyCode) {
        case 38:
            deplace(0, -5);
            break;
        case 40:
            deplace(0, 5);
            break;
        case 37:
            deplace(-5, 0);
            break;
        case 39:
            deplace(5, 0);
            break;
    }
})