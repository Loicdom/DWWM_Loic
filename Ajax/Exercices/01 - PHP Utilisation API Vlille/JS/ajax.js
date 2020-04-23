// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
var enregs; // contient la reponse de l'API
// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            console.log(this.responseText);
            console.log(reponse);
            enregs = reponse.records;
            for (let i = 0; i < enregs.length; i++) {
                // on crée la ligne et les div internes
                ligne = document.createElement("div");
                ligne.setAttribute("class", "ligne");
                ligne.id = i;
                commune = document.createElement("div");
                commune.setAttribute("class", "commune");
                ligne.appendChild(commune);
                nbvelosdispo = document.createElement("div");
                nbvelosdispo.setAttribute("class", "nbvelosdispo");
                ligne.appendChild(nbvelosdispo);
                nbplacesdispo = document.createElement("div");
                nbplacesdispo.setAttribute("class", "nbplacesdispo");
                ligne.appendChild(nbplacesdispo);
                etat = document.createElement("div");
                etat.setAttribute("class", "etat");
                ligne.appendChild(etat);
                contenu.appendChild(ligne);
                espace = document.createElement("div");
                espace.setAttribute("class","espaceHorizon");
                contenu.appendChild(espace);
                //on met à jour le contenu
                commune.innerHTML = enregs[i].fields.commune;
                nbvelosdispo.innerHTML = enregs[i].fields.nbvelosdispo;
                nbplacesdispo.innerHTML = enregs[i].fields.nbplacesdispo;
                etat.innerHTML = enregs[i].fields.etat;

                // on ajoute un evenement sur ligne pour afficher le detail
                ligne.addEventListener("click", afficheDetail);
            }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function afficheDetail(e) {
    VLilleClique = (e.target).parentNode;
    VLilleClique.removeEventListener("click", afficheDetail);
    detail = document.createElement("div");
    detail.setAttribute("class", "detail");
    adresse = document.createElement("div");
    adresse.setAttribute("class", "adresse");
    detail.appendChild(adresse);
    nom = document.createElement("div");
    nom.setAttribute("class", "nom");
    detail.appendChild(nom);
    etatconnexion = document.createElement("div");
    etatconnexion.setAttribute("class", "etatconnexion");
    detail.appendChild(etatconnexion);
    localisation = document.createElement("div");
    localisation.setAttribute("class", "localisation");
    detail.appendChild(localisation);
    adresse.innerHTML = enregs[VLilleClique.id].fields.adresse;
    nom.innerHTML = enregs[VLilleClique.id].fields.nom;
    etatconnexion.innerHTML= "  Etat de connexion " + enregs[VLilleClique.id].fields.etatconnexion;
    localisation.innerHTML= "  Localisation " + enregs[VLilleClique.id].fields.localisation;
    contenu.insertBefore(detail, VLilleClique.nextSibling);

}

//on envoi la requête
req.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&rows=30&facet=libelle&facet=nom&facet=commune&facet=etat&facet=type&facet=etatconnexion', true);
req.send(null);

