villeAdd = document.getElementById('libelleVilleAdd');
villeAdd.addEventListener("input",LettreMaj1);

function LettreMaj1() {
    villeAdd = document.getElementById('libelleVilleAdd');
    villeAdd.value = villeAdd.value.charAt(0).toUpperCase() + villeAdd.value.substr(1);
}
