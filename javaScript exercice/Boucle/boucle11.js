// function NombreMagique() {
//    var magic = parseInt(Math.random()*100);
//    console.log(magic);
//    var nb=prompt("Entrer un nombre entre 1 et 100 :");
//    while (magic!=nb) {
//       if (magic>nb) {
//          alert("Trop petit");
//       } else {
//          alert("Trop grand");
//       }
//       var nb=prompt("Entrer un autre nombre entre 1 et 100 :");
//    }
//    alert("Bravo !")
//  }
// NombreMagique();

// Nombre magique :

do {
   var reponse = parseInt(Math.random() * 100);
   console.log("La réponse est " + reponse);

   var nb = prompt("Devinez le nombre : ");

   while (nb != reponse) {
      if (nb < reponse) {
         alert("trop petit");
         console.log(nb + " est trop petit.");
      }
      else {
         alert("trop grand");
         console.log(nb + " est trop grand.");
      }
      console.log("Dernier chiffre donné : " + nb);
      nb = prompt("Devinez le chiffre : ");
   }
   alert("Bien joué !");
   replay = comfirm("Veut-tu rejouer ?");
} while (replay);

