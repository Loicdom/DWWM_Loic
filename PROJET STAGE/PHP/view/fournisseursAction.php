<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_POST["idFournisseur"];
}
$libelle = $_POST["libelleFournisseur"]; // on récupère le libelle du fournisseur du formulaire
$codeFour = $_POST["codeFournisseur"]; // on récupère le code du fournisseur du formulaire
$p = new Fournisseurs($_POST);
switch ($mode) {
    case "ajout":
        PCGAManager::addCompteFournisseur($codeFour, $libelle); // on ajoute un nouveau compte fournisseur
        $idPCGA = PCGAManager::getIdByNumcompte('401' . $codeFour);
        $p = new Fournisseurs(["codeFournisseur" => $codeFour, "libelleFournisseur" => $libelle, "idPCGA" => $idPCGA]);
        FournisseursManager::add($p); // on ajoute un fournisseur
    break;
    case "modif":
        FournisseursManager::update($p);
        break;
    case "suppr":
        $idPCGA = PCGAManager::getIdByNumcompte('401' . $codeFour);
        PCGAManager::delete($idPCGA);
        FournisseursManager::delete($id);
}
header("location:index.php?action=fournisseursListe");
