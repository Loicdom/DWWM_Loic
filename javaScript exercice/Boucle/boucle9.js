function CalculNbJeune() 
{
   var compteurj = 0;
   var compteurm = 0;
   var compteurv = 0;
   do 
   {
      var age = prompt("Entrer votre age (age > 100 pour arrêter la saisi) : ");
      if(age<20) 
      {
         compteurj++;
      } else if (age<41) 
      {
         compteurm++;
      } else 
      {
         compteurv++;
      }
   } while(age<100)
   document.write("Le nombre de jeune est de : "+compteurj+"<br>Le nombre de personne d'âge moyenne : "+compteurm+"<br>Le nombre de personne agée : "+compteurv);
}
CalculNbJeune();
