<?php
function ChargerClasse($classe)
{
    if (file_exists("php/Controller/" . $classe . ".Class.php")) {
        require "php/Controller/" . $classe . ".Class.php";
    }

    if (file_exists("php/Model/" . $classe . ".Class.php")) {
        require "php/Model/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");
function afficherPage($chemin, $page, $titre, $titreOnglet) {
	require  'php/View/Head.php';
	require  'php/View/Header.php';
	require $chemin . $page.'.php';
	require 'php/View/Footer.php';
}
function afficherPageCo($chemin, $page, $titre, $titreOnglet) {
	require  'php/View/Head.php';
	require  'php/View/HeaderCo.php';
	require $chemin . $page.'.php';
	require 'php/View/FooterCo.php';
}
// on initialise les paramètres du fichier parametre.ini
Parametre::init();
//on active la connexion 
DbConnect::init();
session_start();
// A l'include de la page Route, le code suivant est exécuté
// Si la variable $get existe, on exploite les informations pour afficher la bonne page
 if (isset ( $_GET ['action'] )) {
	// En fonction de ce que contient la variable action de $_GET, on ouvre la page correspondante
	
	switch ($_GET ['action']) {
		
		case 'nouveauUser' :
			{
				afficherPageCo ( 'Php/View/', 'FormEnregistrement', "Nouvel Utilisateur", "Utilisateur" );
				break;
			}
		case 'connect' :
			{
				afficherPageCo ( 'Php/View/', 'FormConnection', "Connexion", "Connexion" );
				break;
			}
		case 'deconnect' :
			{
				afficherPageCo ( 'Php/View/', 'FormDeconnection', "Deconnexion", "Deconnexion" );
				break;
			}
        case "ClientAction":
            AfficherPage('Php/View/',"ClientAction","");
            break;
        case "ClientForm":
            AfficherPage('Php/View/',"ClientForm","Gestion du client");
            break;
        case "ClientListe":
            AfficherPage('Php/View/',"Clientliste","Liste des clients");
            break;
	}
} else { // Sinon, on affiche la page principale du site
	afficherPageCo ( 'Php/View/', 'FormConnection', "Connexion", "Connexion" );
} 
