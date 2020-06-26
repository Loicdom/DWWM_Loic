<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_POST["idPCGA"];
}    
$p = new PCGA($_POST);
switch ($mode) {
    case "ajout":
        PCGAManager::add($p);
        break;
    case "modif":
        PCGAManager::update($p);
        break;
    case "suppr":
        PCGAManager::delete($id);
}
header("location:index.php?action=planComptableListe");
