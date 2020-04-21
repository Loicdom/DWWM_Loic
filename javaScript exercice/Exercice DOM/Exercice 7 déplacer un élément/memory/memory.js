var cartes = ["carte1.png","carte2.png","carte3.png","carte4.png","carte5.png","carte6.png","carte7.png","carte8.png","carte1.png","carte2.png","carte3.png","carte4.png","carte5.png","carte6.png","carte7.png","carte8.png"];

function melangecartes(cartes) {
    for (i=0; i<cartes.length-1; i++) {
        var m1 = Math.floor(Math.random()*(cartes.length))
        var m2 = Math.floor(Math.random()*(cartes.length))
        temp = cartes[m1];
        cartes[m1] = cartes[m2];
        cartes[m2] = temp;
    }
}

melangecartes(cartes);

var etatsCartes=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]; // les cartes sont retourner

function Affichage(numCarte){
    switch(etatsCartes[numCarte]){
        case 0:
            img[numCarte].src="fondcarte.png";
            break;
        case 1:
            img[numCarte].src=cartes[numCarte];
            break;
        case -1:
            img[numCarte].style.visibility="hidden";
            break;
    }
}