function on_mouse_down_square(event) {
    mouse_down=true; //repère si le bouton est enfoncé
}

function on_mouse_up(event){
    mouse_down=false; //repère si le bouton est relaché
}

function on_mouse_move(event) {
    if (mouse_down === true) {
        document.querySelector('#carre').style.left =event.clientX+'px';
        document.querySelector('#carre').style.top =event.clientY+'px';
    }
}

var mouse_down = false;

var square = document.getElementById("carre");
square.addEventListener("mousedown", on_mouse_down_square);

document.addEventListener("mousemove", on_mouse_move);

document.addEventListener("mouseup", on_mouse_up);

