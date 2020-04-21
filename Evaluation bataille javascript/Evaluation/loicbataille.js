function init() {
    plateau = document.getElementsByClassName("plateau")[0];
    for (let i = 0; i < 11; i++) {
        uneLigne = document.createElement("div");
        for (let j = 0; j < 11; j++) {
            uneCase = document.createElement("div");
            uneCase.setAttribute("class", "case");
            if (i == 0) {
                uneCase.style.backgroundColor = "grey";
                if (j != 0) {
                    uneCase.innerHTML = String.fromCharCode(j + 64);
                }
            }
            if (j == 0) {
                uneCase.style.backgroundColor = "grey";
            }
            uneLigne.appendChild(uneCase);
        }
        plateau.appendChild(uneLigne);
    }
}

function afficherTableau(tab) {
    lesCases = document.getElementsByClassName("case");
    for (let i = 1; i<11; i++) {
        for (let j =1; j<11;j++){
            lesCases[i*11+j].innerHTML = tab[i-1][j-1];
        }
    }
}

init(); 

var plateau = [[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
[0, 5, 0, 0, 0, 0, 2, 2, 2, 2],
[0, 5, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
[0, 0, 0, 0, 0, 0, 0, 3, 0, 0],
[4, 4, 4, 0, 0, 0, 0, 3, 0, 0],
[0, 0, 0, 0, 0, 0, 0, 3, 0, 0]];

afficherTableau(plateau);
