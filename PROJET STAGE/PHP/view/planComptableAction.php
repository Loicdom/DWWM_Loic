<?php
$mode = $_GET["m"];
if ($mode != "ajout") { // on récupère le mode et si différent de ajout on recupere l'id aussi
    $id = $_POST["idPCGA"];
}    
$p = new PCGA($_POST);
switch ($mode) {
    case "ajout":
        PCGAManager::add($p); // Lance la fonction pour ajouter un compte 
        break;
    case "modif":
        PCGAManager::update($p); // Lance la fonction pour modifier un compte 
        break;
    case "suppr":
        PCGAManager::delete($id); // Lance la fonction pour supprimer un compte 
}
header("location:index.php?action=planComptableListe"); // renvoi vers le plan comptable
