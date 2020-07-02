const requ = new XMLHttpRequest();

requ.onreadystatechange = function(event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {

            console.log("Réponse reçue: %s", this.responseText);
            var inputCodeFournisseur = document.getElementById("codeFournisseur").value;
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            console.log(inputCodeFournisseur)
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('GET', '/DWWM_Loïc/PROJET STAGE/PHP/MODEL/APICodeFournisseurs.php', true);
requ.send();