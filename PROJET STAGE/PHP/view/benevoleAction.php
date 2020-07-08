<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_POST["idPersonne"]; // on récupère le mode et si différent d'ajout on récupère l'id sur lequel on doit modifier ou supprimer
}    
$p = new Personnes($_POST);
switch ($mode) {
    case "ajout":
        PersonnesManager::addBenevole($p); // Lance la fonction pour ajouter un enfant
        break;
    case "modif":
        PersonnesManager::updateBenevole($p); // Lance la fonction pour modifier un enfant
        break;
    case "suppr":
        PersonnesManager::delete($id); // Lance la fonction pour supprimer un enfant
}
header("location:index.php?action=benevoleListe"); // renvoi vers enfant liste, juste après avoir exécuter la fonction
