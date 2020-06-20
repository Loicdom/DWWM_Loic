<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_POST["idFournisseur"];
}    
$p = new Fournisseurs($_POST);
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
