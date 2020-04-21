function Sommeintervalle() {
    var somme=0;
    var n1=parseInt(prompt("Entrer un nombre :"));
    var n2=parseInt(prompt("Entrer un 2e nombre supérieur :"));

    for(i=n1; i<n2+1; i++){
      somme=somme+i; 
    }
    alert(somme)
  }
  Sommeintervalle();
