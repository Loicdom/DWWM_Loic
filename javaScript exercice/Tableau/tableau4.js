function TriBulle(tableau) 
{
        var flag = 1;
        var tour = 1;
        var temp = 0;

        while (flag == 1) 
        {
                flag = 0;

                for (var i = 0; i < (tableau.length) - tour; i++)
                 {
                        if (tableau[i] > tableau[i + 1]) 
                        {
                                temp = tableau[i];
                                tableau[i] = tableau[i + 1];
                                tableau[i + 1] = temp;
                                flag = 1;
                        }
                }
                tour++;
        }
}

function AfficheTab(tableau) {
        var chaine = ""
        for (var i = 0; i < tableau.length; i++) {
                chaine += "[" + tableau[i] + "] ";
        }
        return chaine;
}

function remplirTab() {
        var n = parseInt(prompt("Taille du tableau : "));
        var tab = [];
        for (var i = 0; i < n; i++) {
                var val = prompt("Entrer la valeur n°" + (i + 1) + " : ");
                tab[i] = val;
        }
}
tab = remplirTab();
console.log("Voici le tableau de départ : " + AfficheTab(tab));
// tab=TriBulle(tab);
alert("Le tableau trié : " + AfficheTab(tab));

