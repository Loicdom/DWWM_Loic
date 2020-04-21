var body = document.getElementsByTagName("body")[0];
var red = document.getElementById("rouge");
var green = document.getElementById("vert");
var blue = document.getElementById("bleu");

var rouge = document.getElementById("btnRouge");
rouge.addEventListener("click",function(){
    document.body.style.backgroundColor="red";
})

var vert = document.getElementById("btnVert");
vert.addEventListener("click",function(){
    document.body.style.backgroundColor="green";
})

var bleu = document.getElementById("btnBleu");
bleu.addEventListener("click",function(){
    document.body.style.backgroundColor="blue";
})