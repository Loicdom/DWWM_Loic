<?php
//fichier pour appel AJAX
include "FournisseursManager.Class.php";
include "../Controller/Parametre.Class.php";
include "DbConnect.class.php";
Parametre::init();
DbConnect::init();
echo json_encode(FournisseursManager::codeFournisseur());
