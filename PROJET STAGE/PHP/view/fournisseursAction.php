<?php
$mode = $_GET["m"];
$p = new Fournisseurs($_POST);
$id = $_POST["idFournisseur"];
switch ($mode) {
    case "ajout":
        FournisseursManager::add($p);
        break;
    case "modif":
        FournisseursManager::update($p);
        break;
    case "suppr":
        FournisseursManager::delete($id);
}
header("location:index.php?action=fournisseursListe");
