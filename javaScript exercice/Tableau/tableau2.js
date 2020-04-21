function AfficheTab (tableau)
{
        for(let i=0; i<tableau.length; i++)
                chaine += "["+tableau[i]+"] ";
        return chaine;
}

function GetInteger()
{
   do {
           var nb = prompt("Entrer un nombre :");
   } while(!(Number.isInteger(nb)));
   
   return nb;
}

function initTab()
{
        var nb = GetInteger(); // on vérifie si c'est bien un entier
        tab = new Array(nb);
        return tab;
}

function saisieTab(tab)
{
        alert("Saisissez le contenu du tableau : ");
        for(let i=0; i<tab.length; i++) // tab.length pour la taille du tableau
        {
                var contenuDuTab = GetInteger() // On remplit le tableau avec le chiffre de l'utilisateur
                tab[i]=contenuDuTab;
        }
        return tab;
}

function rechercheTab(tab)
{
        var n = GetInteger();
        document.write("<br>" + tab[n-1]); // n-1 => car l'utilisateur ne sait pas qu'on démarre à 0
}


