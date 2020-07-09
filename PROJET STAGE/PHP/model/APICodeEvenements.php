<?php
//fichier pour appel AJAX
include "EvenementsManager.Class.php"; //On inclut les fichier qu'on a besoin 
include "../Controller/Parametre.Class.php";
include "DbConnect.class.php";
Parametre::init(); // initialisation du paremètre et du dbConnect pour l'accès a la base de données
DbConnect::init();
EvenementsManager::codeEvenement(); // on lance la foncion qui est dans le managers
