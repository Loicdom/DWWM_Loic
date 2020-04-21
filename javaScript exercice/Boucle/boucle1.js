function Saisi() {
    var saisi=1;
    var compteur=0;
    var s1="";
    do
    {
       saisi=prompt("Entrer prenom :");
       compteur ++; 
       s1=s1+" "+saisi
    } while (saisi=="");
    alert("Le nombre de prenoms : "+compteur);
    alert("Les prenoms : "+s1);
}

Saisi();
