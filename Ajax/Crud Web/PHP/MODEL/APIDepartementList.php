<?php
//fichier pour appel AJAX

// on definit les parametres
require "../Controller/Parametre.class.php";
Parametre::init();
//Connection BDD
require "DbConnect.class.php";
DbConnect::init();
//Recherche en base de données
$db = DbConnect::getDb(); // Instance de PDO.
// on récupère le paramètre
$libelle = $_POST["libelle"];
// Recherche des département en base de données.
$q = $db->prepare('INSERT into clients (libelle) Values ("'.$libelle.'")');
$q->execute();

