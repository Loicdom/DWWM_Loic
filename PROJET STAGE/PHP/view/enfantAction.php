<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_POST["idPersonne"];
}    
$p = new Personnes($_POST);
switch ($mode) {
    case "ajout":
        PersonnesManager::addEnfant($p);
        break;
    case "modif":
        PersonnesManager::updateEnfant($p);
        break;
    case "suppr":
        PersonnesManager::delete($id);
}
header("location:index.php?action=enfantListe");
