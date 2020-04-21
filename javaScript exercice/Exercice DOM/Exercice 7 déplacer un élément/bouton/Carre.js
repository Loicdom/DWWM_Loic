// var field = document.getElementById("field"); // terrain
// var player = document.getElementById("player"); // joueur
// var speed = 10; // le déplacement
// var x = 10; // position x
// var y = 10; // position y
// var limiteLeftTop = 0; // limite du terrain en X
// var limiteRightBottom = 500 // limite du terrain en Y

// ==> déplacement
// function move(direction) {
//     switch (direction) {
//         case "up":
//             if (parseInt(x - speed) > limiteLeftTop) { // on vérifie que la prochaine valeur dépassera pas la limite
//                 x = parseInt(x - speed);
//                 player.style.top = x + "px";
//             }
//             break;

//         case "down":
//             if (parseInt(x + speed) <= limiteRightBottom) {
//                 x = parseInt(x + speed);
//                 player.style.top = x + "px";
//             }
//             break;

//         case "left":
//             if (parseInt(y - speed) > limiteLeftTop) {
//                 y = parseInt(y - speed);
//                 player.style.left = y + "px";
//             }
//             break;

//         case "right":
//             if (parseInt(y + speed) <= limiteRightBottom) {
//                 y = parseInt(y + speed);
//                 player.style.left = y + "px";
//             }
//             break;
//     }
// }

// déplacement avec le boutons
// document.getElementById("button_up").addEventListener("click", move("up"));
// document.getElementById("button_down").addEventListener("click", move("down"));
// document.getElementById("button_left").addEventListener("click", move("left"));
// document.getElementById("button_right").addEventListener("click", move("right"));

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

document.getElementById("up").addEventListener("click", function() { deplace(0, -5); });
document.getElementById("left").addEventListener("click", function() { deplace(-5, 0); });
document.getElementById("down").addEventListener("click", function() { deplace(0, 5); });
document.getElementById("right").addEventListener("click", function() { deplace(5, 0); });