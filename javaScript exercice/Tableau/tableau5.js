function TriInsertion(tableau) 
{
    for (let i =1; i<(tableau.length -1); i++)
    {
            var posmini = 1;

            for (let j = i+1; j<tableau.length; j++)
            {
                    if (tab[j]>tab[posmini])
                    {
                            posmini = j;
                    }
            }
            var temp = tab[posmini];
            tableau[posmini] = tableau[i];
            tableau[i]= temp;
    }    
}

