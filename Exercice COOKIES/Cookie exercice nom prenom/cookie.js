/*********************************************************************** Gestion des cookies ********************************************************************/
// Méthode qui permet de créer ou modifier un cookie

function createCookie(name,value,days) {
    // permet de créer un cookie
	if (days) {
        // si le nombre de jour est renseigné, on le transforme en millieme de seconde
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "expires="+date.toGMTString();
	}
    else var expires = "";
    //le cookie doit contenir  clé=valeur;expires=temps;path=nomDomaine
	document.cookie = name+"="+value+"; " + expires+"; path=/";
}

// Méthode qui permet de lire la valeur d’un cookie 

function readCookie(name) {
    // on récupère tous les cookies du site en une fois, séparé par ; 
    // on range dans un tableau chaque cookie
    var listeCookies = document.cookie.split('; ');
	for(let i=0;i < listeCookies.length;i++) {
        // pour chaque cookie, on sépare en tableau la clé et la valeur
        var unCookie = listeCookies[i].split("=");
        // si la clé correspond au cookie cherché, on renvoi la valeur
		if (unCookie[0]==name) return unCookie[1];
	}
	return null;
}

// Supprimer un cookie

function eraseCookie(name) {
    // pour supprimer un cookie, on le périme
	createCookie(name,"",-1);
}

/************************************************************************** Enregistrer et redonner le nom et prénom **************************************************************************/

if (readCookie("prenom") != null && readCookie("nom") != null) {
    alert("bonjour M/Mme "+readCookie("nom")+" "+readCookie("prenom"))
    eraseCookie("prenom");
    eraseCookie("nom");
} else {
    var prenom = prompt("quel est votre prénom :");
    createCookie("prenom",prenom,5);
    var nom = prompt("quel est votre nom :");
    createCookie("nom",nom,5);
}