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

spl_autoload_register("ChargerClasse");
function afficherPage($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footer.php';
}

function afficherPageFournisseur($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footerFournisseur.php';
}

function afficherPageFournisseurAction($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header1.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footerFournisseur.php';
}

function afficherPageEcriture($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footerEcriture.php';
}

function afficherPageEcriture1($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header1.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footerEcriture.php';
}

function afficherPagefooterVisuelCompte($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footerVisuelCompte.php';
}

function afficherPageFooterConnexion($chemin, $page, $titre)
{
    require  'PHP/view/head.php';
    require  'PHP/view/header1.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footerConnexion.php';
}

function afficherPageImpression($chemin, $page, $titre)
{
    require  'PHP/view/head1.php';
    require  'PHP/view/header1.php';
    require $chemin . $page . '.php';
    require 'PHP/view/footer.php';
}

function afficherPageExport($chemin, $page, $titre)
{
    require $chemin . $page . '.php';
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
                afficherPage('PHP/view/', 'tableauBord', 'Tableau de bord');
                break;
            }
        case 'montantDepart': {
                afficherPageImpression('PHP/view/', 'montantDepart', 'Montant banque et caisse');
                break;
            }
        case 'montantDepartAction': {
                afficherPageImpression('PHP/view/', 'montantDepartAction', 'Montant banque et caisse');
                break;
            }
        case 'connect': {
                afficherPageFooterConnexion('PHP/view/', 'formConnexion', 'Connexion');
                break;
            }
        case 'deconnect': {
                afficherPageFooterConnexion('PHP/view/', 'formDeconnexion', 'Déconnexion');
                break;
            }
        case 'fournisseursListe': {
                afficherPageFournisseur('PHP/view/', 'fournisseursListe', 'Liste des fournisseurs');
                break;
            }
        case 'fournisseursForm': {
                afficherPageFournisseur('PHP/view/', 'fournisseursForm', 'Fournisseur');
                break;
            }
        case 'fournisseursAction': {
                afficherPageFournisseurAction('PHP/view/', 'fournisseursAction', '');
                break;
            }
        case 'bureau': {
                afficherPage('PHP/view/', 'bureau', 'Bureau de l\'association');
                break;
            }
        case 'benevoleListe': {
                afficherPage('PHP/view/', 'benevoleListe', 'Liste des bénévoles');
                break;
            }
        case 'benevoleForm': {
                afficherPage('PHP/view/', 'benevoleForm', 'Bénévole');
                break;
            }
        case 'benevoleAction': {
                afficherPageImpression('PHP/view/', 'benevoleAction', '');
                break;
            }
        case 'usersListe': {
                afficherPage('PHP/view/', 'usersListe', 'Liste des utilisateurs');
                break;
            }
        case 'usersForm': {
                afficherPageFooterConnexion('PHP/view/', 'usersForm', 'utilisateur');
                break;
            }
        case 'formEnregistrement': {
                afficherPage('PHP/view/', 'formEnregistrement', 'utilisateur');
                break;
            }
        case 'budgetPrevisionnel': {
                afficherPage('PHP/view/', 'budgetPrevisionnel', 'Budget Prévisionnel');
                break;
            }
        case 'budgetPrevisionnelForm': {
                afficherPage('PHP/view/', 'budgetPrevisionnelForm', 'Budget Prévisionnel');
                break;
            }
        case 'budgetPrevisionnelAction': {
                afficherPageImpression('PHP/view/', 'budgetPrevisionnelAction', '');
                break;
            }
        case 'planComptableListe': {
                afficherPage('PHP/view/', 'planComptableListe', 'Plan comptable');
                break;
            }
        case 'planComptableForm': {
                afficherPage('PHP/view/', 'planComptableForm', 'Plan comptable');
                break;
            }
        case 'planComptableAction': {
                afficherPageImpression('PHP/view/', 'planComptableAction', '');
                break;
            }
        case 'enfantListe': {
                afficherPage('PHP/view/', 'enfantListe', 'Liste Enfants');
                break;
            }
        case 'enfantForm': {
                afficherPage('PHP/view/', 'enfantForm', 'Enfant');
                break;
            }
        case 'enfantAction': {
                afficherPageImpression('PHP/view/', 'enfantAction', '');
                break;
            }
        case 'ecritureListe': {
                afficherPageEcriture('PHP/view/', 'ecritureListe', 'Liste Ecritures');
                break;
            }
        case 'ecritureForm': {
                afficherPageEcriture('PHP/view/', 'ecritureForm', 'Ecritures');
                break;
            }
        case 'ecritureAction': {
                afficherPageEcriture1('PHP/view/', 'ecritureAction', '');
                break;
            }
        case 'impressionEnfant': {
                afficherPageImpression('PHP/view/', 'impressionEnfant', '');
                break;
            }
        case 'impressionBenevole': {
                afficherPageImpression('PHP/view/', 'impressionBenevole', '');
                break;
            }
        case 'villeForm': {
                afficherPage('PHP/view/', 'villeForm', 'Ville');
                break;
            }
        case 'villeAction': {
                afficherPageImpression('PHP/view/', 'villeAction', '');
                break;
            }
        case 'evenementsListe': {
                afficherPage('PHP/view/', 'evenementsListe', 'Liste des événements');
                break;
            }
        case 'evenementsForm': {
                afficherPage('PHP/view/', 'evenementsForm', 'Evenements');
                break;
            }
        case 'evenementsAction': {
                afficherPageImpression('PHP/view/', 'evenementsAction', '');
                break;
            }
        case 'visuelFacture': {
                afficherPage('PHP/view/', 'visuelFacture', 'Visuel facture');
                break;
            }
        case 'visuelLigne': {
                afficherPage('PHP/view/', 'visuelLigne', 'Visuel ligne écritures');
                break;
            }
        case 'suppressionEcriture': {
                afficherPage('PHP/view/', 'suppressionEcriture', 'Suppression');
                break;
            }
        case 'suppressionAction': {
                afficherPageImpression('PHP/view/', 'suppressionAction', 'Suppression');
                break;
            }
        case 'lettrage': {
                afficherPage('PHP/view/', 'lettrage', 'Lettrage');
                break;
            }
        case 'lettrageForm': {
                afficherPage('PHP/view/', 'lettrageForm', 'Lettrage');
                break;
            }
        case 'lettrageAction': {
                afficherPageImpression('PHP/view/', 'lettrageAction', 'Lettrage');
                break;
            }
        case 'visuelParCompteDate': {
                afficherPagefooterVisuelCompte('PHP/view/', 'visuelParCompteDate', 'Choix des dates');
                break;
            }
        case 'visuelParCompte': {
                afficherPagefooterVisuelCompte('PHP/view/', 'visuelParCompte', 'Visuel par choix comptes');
                break;
            }
        case 'dateImpresFact': {
                afficherPage('PHP/view/', 'dateImpresFact', 'Choix dates pour impression');
                break;
            }
        case 'factureImpression': {
                afficherPageImpression('PHP/view/', 'factureImpression', 'Impression factures');
                break;
            }
        case 'bilanImpression': {
                afficherPageImpression('PHP/view/', 'bilanImpression', 'Impression bilan');
                break;
            }
        case 'dateBilanJournauxImpession': {
                afficherPage('PHP/view/', 'dateBilanJournauxImpession', 'Date pour impression');
                break;
            }
        case 'impressionChoixListe': {
                afficherPage('PHP/view/', 'impressionChoixListe', 'Choix du journal');
                break;
            }
        case 'journauxImpression': {
                afficherPageImpression('PHP/view/', 'journauxImpression', 'Impression du journal');
                break;
            }
        case 'exportCsvJournaux': {
                afficherPageExport('PHP/view/', 'exportCsvJournaux', 'Exportation du journal');
                break;
            }
        case 'exportCsvListeBenevole': {
                afficherPageExport('PHP/view/', 'exportCsvListeBenevole', 'Exportation listes');
                break;
            }
        case 'exportCsvListeEnfant': {
                afficherPageExport('PHP/view/', 'exportCsvListeEnfant', 'Exportation listes');
                break;
            }
    }
} else { // Sinon, on affiche la page principale du site
    afficherPageFooterConnexion('PHP/view/', 'formConnexion', 'Connexion');
}
