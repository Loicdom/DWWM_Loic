function deplace(dx, dy) {
    var deplacement_ok = true;
    var styleCarre = window.getComputedStyle(document.getElementById("carre"), null);
    var t = parseInt(styleCarre.top);
    var l = parseInt(styleCarre.left);
    var w = parseInt(styleCarre.width);
    var h = parseInt(styleCarre.height);
    var listeObs = document.querySelectorAll('.obstacle');
    listeObs.forEach(function (elt) {
        var styleObst = window.getComputedStyle(elt, null);
        var tob = parseInt(styleObst.top);
        var lob = parseInt(styleObst.left);
        var wob = parseInt(styleObst.width);
        var hob = parseInt(styleObst.height);
        deplacement_ok = deplacement_ok && depl_ok(tob, lob, wob, hob, t + dy, l + dx, w, h);

    });



    if (deplacement_ok) {
        document.getElementById("carre").style.top = t + dy + 'px';
        document.getElementById("carre").style.left = l + dx + 'px';
    }
}

function depl_ok(tob, lob, wob, hob, t, l, w, h) {
    if (l < lob + wob && l + w > lob && t < tob + hob && t + h > tob) {
        return false
    }
    return true;
}
document.addEventListener("keydown", function (event) {
    var event = event || window.event, // pour la compatibilite avec tous les navigateurs
        keyCode = event.keyCode;
    var speed = 15;
    // On détecte l'événement puis selon la fleche, on appelle deplace
    switch (keyCode) {
        case 38:
            deplace(0, -speed);
            break;
        case 40:
            deplace(0, speed);
            break;
        case 37:
            deplace(-speed, 0);
            break;
        case 39:
            deplace(speed, 0);
            break;
        case 36:
            deplace(-speed, -speed);
            break;
        case 35:
            deplace(-speed, speed);
            break;
        case 33:
            deplace(speed, -speed);
            break;
        case 34:
            deplace(speed, speed);
            break;
    }
});