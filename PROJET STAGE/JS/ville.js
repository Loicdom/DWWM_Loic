var villeSeletec = document.getElementById("villeSelected").value; // on récupère l'idClasseComptable dans la value de l'input
document.getElementById("idVille").selectedIndex = villeSeletec-1; // -1 car index commence à 0
// On recupère le select et ses options et on selectionne la bonne classe en fonction de l'idclasseComptable
