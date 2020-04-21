function ParticipationExo5() {
    var participation = 0;
    var situation = prompt("Célibataire ou marié (c/m) :");
    var nbE = prompt("Nombre d'enfant(s) à charge :");
    var salaire = prompt("Votre salaire mensuel :");

    participation += nbE*10;
    participation += (situation=="c")?20:25;
    participation += (salaire<1200)?10:0;
    participation = (participation>50)?50:participation;

    alert("Votre participation est de : "+participation+" %");
    var repas = prompt("Veuillez indiquer le prix de votre repas : ");
    var result = repas*(participation/100);
    alert("Le montant du repas après participation est de : "+result+" €");
}

ParticipationExo5();
