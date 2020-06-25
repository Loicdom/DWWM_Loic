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

        case 'tableauBord': {
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
        case 'fournisseursListe': {
                afficherPage('PHP/view/', 'fournisseursListe', "Liste des fournisseurs");
                break;
            }
        case 'fournisseursForm': {
                afficherPage('PHP/view/', 'fournisseursForm', "Fournisseur");
                break;
            }
        case 'fournisseursAction': {
                afficherPage('PHP/view/', 'fournisseursAction', "");
                break;
            }
        case 'bureau': {
                afficherPage('PHP/view/', 'bureau', "Bureau de l'association");
                break;
            }
        case 'benevoleListe': {
                afficherPage('PHP/view/', 'benevoleListe', "Liste des bénévoles");
                break;
            }
        case 'benevoleForm': {
                afficherPage('PHP/view/', 'benevoleForm', "Bénévole");
                break;
            }
        case 'benevoleAction': {
                afficherPage('PHP/view/', 'benevoleAction', "");
                break;
            }
        case 'usersListe': {
                afficherPage('PHP/view/', 'usersListe', "Liste des utilisateurs");
                break;
            }
        case 'usersForm': {
                afficherPage('PHP/view/', 'usersForm', "utilisateur");
                break;
            }
        case 'usersAction': {
                afficherPage('PHP/view/', 'usersAction', "");
                break;
            }
        case 'formEnregistrement': {
                afficherPage('PHP/view/', 'formEnregistrement', "utilisateur");
                break;
            }
        case 'budgetPrevisionnel': {
                afficherPage('PHP/view/', 'budgetPrevisionnel', "Budget Prévisionnel");
                break;
            }
        case 'budgetPrevisionnelForm': {
                afficherPage('PHP/view/', 'budgetPrevisionnelForm', "Budget Prévisionnel");
                break;
            }
            case 'budgetPrevisionnelAction': {
                afficherPage('PHP/view/', 'budgetPrevisionnelAction', "");
                break;
            }
    }
} else { // Sinon, on affiche la page principale du site
    afficherPageSansFooter('PHP/view/', 'formConnexion', "Connexion");
}
