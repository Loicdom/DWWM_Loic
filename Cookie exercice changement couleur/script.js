var body = document.getElementsByTagName("body")[0];
var changeCouleur = document.getElementById("couleur");

var rouge = document.getElementById("btnRouge");
rouge.addEventListener("click", function () {
    document.body.style.backgroundColor = "red";
})

var vert = document.getElementById("btnVert");
vert.addEventListener("click", function () {
    document.body.style.backgroundColor = "green";
})

var bleu = document.getElementById("btnBleu");
bleu.addEventListener("click", function () {
    document.body.style.backgroundColor = "blue";
})

changeCouleur.addEventListener("click", function () {
    AffichageCouleur();
})

function AffichageCouleur() {
    var red = document.getElementById("rouge").value;
    var green = document.getElementById("vert").value;
    var blue = document.getElementById("bleu").value;
    if(blue<256 && green<256 && red<256){
        document.body.style.backgroundColor='rgb(' + red + ', ' + green + ', ' + blue + ')';
    } else {
        alert("code RGB invalide");
    }
}

