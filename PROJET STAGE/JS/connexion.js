/************ Connexion ************/
// on recup l'oeil pour lui mettre un evenement
var oeil=document.getElementsByClassName("fa fa-eye");
for(i=0;i<oeil.length;i++){
oeil[i].addEventListener("click",showPassword);
}

function showPassword(){
  console.log();
    if (document.getElementById("motDePasse").type=='text'){
        document.getElementById("motDePasse").type='password';
    }
    else{
        document.getElementById("motDePasse").type='text';
    }  
}
// affichage et validiter du mdp 
var monInput = document.getElementById("motDePasse");
var lettre = document.getElementById("lettre");
var capital = document.getElementById("capital");
var nb = document.getElementById("chiffre");
var longueur = document.getElementById("longueur");
var caractSpe = document.getElementById("special");

// on affiche le message (5 caractères min ...), on focus l'input
monInput.addEventListener('focus',function() {
  document.getElementById("message").style.display = "block";
  console.log(1)
});

// on cache le message 
monInput.addEventListener('blur',function() {
  document.getElementById("message").style.display = "none";
  console.log(2)
});

// verification du contenu (1 lettre maj, 1 lettre mini ...)dans le mot de passe 
monInput.addEventListener('keyup',function(){
  // verif si lettre 
  var miniscule = /[a-z]/g;
  if(monInput.value.match(miniscule)) {  
    lettre.classList.remove("invalid");
    lettre.classList.add("valid");
  } else {
    lettre.classList.remove("valid");
    lettre.classList.add("invalid");
  }
  
  // on verif si lettres sont majuscule
  var majus= /[A-Z]/g;
  if(monInput.value.match(majus)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Verif chiffre
  var chiffre = /[0-9]/g;
  if(monInput.value.match(chiffre)) {  
    nb.classList.remove("invalid");
    nb.classList.add("valid");
  } else {
    nb.classList.remove("valid");
    nb.classList.add("invalid");
  }
  

  // Verif longueur
  if(monInput.value.length >= 5) {
    longueur.classList.remove("invalid");
    longueur.classList.add("valid");
  } else {
    longueur.classList.remove("valid");
    longueur.classList.add("invalid");
  }

  var caract = /[-+!*$@%_]/g;
  if(monInput.value.match(caract)) {  
    caractSpe.classList.remove("invalid");
    caractSpe.classList.add("valid");
  } else {
    caractSpe.classList.remove("valid");
    caractSpe.classList.add("invalid");
  }
});
