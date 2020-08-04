// Pour modif ou suppr, il faut récupèrer l'id pour mettre la bonne selection dans le select :
var villeSeletec = document.getElementById("villeSelected").value; // on récupère l'idVille dans la value de l'input
document.getElementById("idVille").selectedIndex = villeSeletec-1; // -1 car index commence à 0
// On recupère le select et ses options et on selectionne la bonne ville en fonction de l'idVille
