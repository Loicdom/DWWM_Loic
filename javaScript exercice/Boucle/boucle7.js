function Multiple() {
   var n = prompt("Entrer le nombre de multiple à calculer (nombre d'opération) : ");
   var x = prompt("Entrer le nombre enier auquel on calculera c'est multiple : ");

   for (var i = 0; i < n; i++) {
      document.write((parseInt(i) + 1) + " x " + x + " = " + (parseInt(i) + 1) * x + "<br>");
   }
}
Multiple();
