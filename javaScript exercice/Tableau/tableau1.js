function AffichageTableau(tableau)
{
        var chaine = "Le tableau contient : "
        for(var i=0; i<tableau.length; i++)
        {
                chaine += "["+tableau[i]+"] ";
        }        
        return chaine;
}

var n = parseInt(prompt("Taille du tableau : "));
var tab = []; 
for (var i = 0; i < n; i++)  
{    
    var val=prompt("Entrer la valeur n°"+(i+1)+" : "); 
    tab[i]=val;
} 
alert(AffichageTableau(tab))

