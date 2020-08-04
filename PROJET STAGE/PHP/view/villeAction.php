<?php
$mode = $_GET["m"];
$p = new Villes($_POST);
VillesManager::add($p);

if($mode == 'benevole') {
    header("location:index.php?action=benevoleListe");
} else {
    header("location:index.php?action=enfantListe"); 
}
