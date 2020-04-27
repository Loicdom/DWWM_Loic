<?php
//fichier pour appel AJAX
include "ClientManager.Class.php";
include "../Controller/Parametre.Class.php";
include "DbConnect.class.php";
Parametre::init();
DbConnect::init();
echo json_encode(ClientManager::count());
