<?php
session_start();
function ChargerClasse($classe)
{
    if (file_exists("PHP/controller/" . $classe . ".Class.php")) {
        require "PHP/controller/" . $classe . ".Class.php";
    }

    if (file_exists("PHP/model/" . $classe . ".Class.php")) {
        require "PHP/model/" . $classe . ".Class.php";
    }
}

function afficherPageSansFooter($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header1.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footer1.php';
}

spl_autoload_register("ChargerClasse");
function afficherPage($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footer.php';
}
// on initialise les paramètres du fichier parametre.ini
Parametre::init();
//on active la connexion 
DbConnect::init();

// A l'include de la page Route, le code suivant est exécuté
// Si la variable $get existe, on exploite les informations pour afficher la bonne page
if (isset($_GET['action'])) {
    // En fonction de ce que contient la variable action de $_GET, on ouvre la page correspondante

    switch ($_GET['action']) {

        case 'tableaubord': {
                afficherPage('PHP/view/', 'tableauBord', "Tableau de bord");
                break;
            }
        case 'connect': {
            afficherPageSansFooter('PHP/view/', 'formConnexion', "Connexion");
                break;
            }
        case 'deconnect': {
                afficherPage('PHP/view/', 'formDeconnexion ', "Déconnexion");
                break;
            }
        case 'menuListe': {
                afficherPage('PHP/view/', 'menuListe', "Menu du jeu");
                break;
            }
        case 'scoreListe': {
                afficherPage('PHP/view/', 'scoreListe', "Liste des 10 meilleurs scores");
                break;
            }
        case 'map1': {
                afficherPageSansFooter('PHP/view/', 'map1', "map n°1");
                break;
            }
        case 'map2': {
                afficherPageSansFooter('PHP/view/', 'map2', "map n°2");
                break;
            }
        case 'gameover': {
                afficherPageSansFooter('PHP/view/', 'gameover', "");
                break;
            }
        case 'bravo': {
                afficherPageSansFooter('PHP/view/', 'bravo', "");
                break;
            }
    }
} else { // Sinon, on affiche la page principale du site
    afficherPageSansFooter('PHP/view/', 'formConnexion', "Connexion");
}
