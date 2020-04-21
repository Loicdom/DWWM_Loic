function NombrePremier(nb) {

   for(let i = 2; i<nb; i++)
   {
      if(nb%i==0)
      {
         return false;
      }
   } 
   return true;
}

var nombre = prompt("Entrer un nombre : ");   
   if(NombrePremier(parseInt(nombre)))
   {
      alert("C'est un nombre premier");
   } else 
   {
      alert("Ce n'est pas un nombre premier")
   }
