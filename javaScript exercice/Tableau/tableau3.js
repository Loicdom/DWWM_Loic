/******************* Pour savoir si un prénom fait partie du tableau *********************/

// function TrouvePositionPrenom(tableauPrenom)
// {
//         do {
//                 var saisie = prompt("Saisir un prénom à chercher : ");
//                 var pos = tableauPrenom.indexOf(saisie);
//         } while(pos == -1); // indexOf retourne -1 si il ne trouve pas 
//                         // si le prenom fait partie de la liste on retourne la position
//         return pos;
// }

// function RetirePrenom(tableauPrenom, pos)
// {
//         tab1 = new Array;
//         tab2 = new Array;
//         tab1 = tableauPrenom.slice(0, pos);
//         tab2 = tableauPrenom.slice(pos+1, parseInt(tableauPrenom.length));

//         return tab1.concat(tab2);
// }

// function AjouteVide(tableauPrenom)
// {
//         tableauPrenom[tableauPrenom.length+1] = "";
//         return tableauPrenom;
// }

function afficheTab(tab)
{
        for(let i=0; i<tab.length; i++)
        {
                document.write("  "+tab[i]);
        }
        document.write("<br>");
}

function trouvePrenom(mot, tab)
{
        for (let i=0; i<tab.length; i++)
        {
                if (tab[i]==mot)
                {
                        var lim = i;
                        for(i=lim; i<tab.length; i++)
                        {
                                tab[i] = "";
                                if (tab[i]=="")
                                {
                                        tab[i] = tab[i+1];
                                }
                                if (tab[i]==undefined)
                                {
                                        tab[i]="";
                                }
                        }
                }
        }
        return tab;
}

var tab = ["martine","alison","maxence","nicolas","benjamin","baptiste","nabil"]
do {
        var mot = prompt("Entrer un prenom : ");
        tab = trouvePrenom(mot, tab);
        afficheTab(tab);
        continuer = confirm("Voulez vous continuer ? ");
} while(continuer);
afficheTab(tab);