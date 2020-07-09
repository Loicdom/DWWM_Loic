<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_POST["idEvenement"];
}
$libelle = $_POST["libelleEvenement"]; // on récupère le libelle Evenement du formulaire
$codeEvent = $_POST["codeEvenement"]; // on récupère le code Evenement du formulaire
$p = new Evenements($_POST);
switch ($mode) {
    case "ajout":
        EvenementsManager::add($p); // on ajoute un Evenement
        PCGAManager::addCompteEvenement($codeEvent,$libelle); // on ajoute un nouveau compte Evenement
        break;
    case "modif":
        EvenementsManager::update($p);
        break;
    case "suppr":
        EvenementsManager::delete($id);
}
header("location:index.php?action=evenementsListe");
