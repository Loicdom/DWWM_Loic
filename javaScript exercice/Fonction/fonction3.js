function nombreCaracteres(lettre,phrase)
    {
        var compteur = 0;
        for(var i = 0; i < phrase.length; i++)
        {
            if(lettre == phrase[i])
            compteur++;
        }
        return compteur;
    }
    phrase=prompt("Entrer une phrase :");
    lettre=prompt("Entrer une lettre a rechercher :");
    alert("La lettre apparait "+nombreCaracteres(lettre,phrase)+" fois.");