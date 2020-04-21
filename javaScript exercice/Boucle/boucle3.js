function SommeEntierInferieur() {
  var n;
  var somme=0;
  n=parseInt(prompt("Entrer un nombre :"));
  for(i=0; i<n+1; i++){
    somme=somme+i; 
  }
  alert(somme)
}
SommeEntierInferieur();
