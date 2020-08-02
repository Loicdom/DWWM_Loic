<?php

use Automattic\WooCommerce\Blocks\RestApi\Controllers\Variations;

$typeEcriture = $_GET["j"];
$libelleAnnee = ExerciceComptableManager::getById($annee);
$date = $libelleAnnee->getLibelleExercice()."/01/01";
$e = new Ecritures(["typeEcriture" => $typeEcriture, "dateEcriture" => $date, "libelleEcriture" => "Montant de départ", "idExerciceComptable" => $annee]);
EcrituresManager::add($e);
$idEcriture = EcrituresManager::getMaxIdEcriture();

for ($i = 0; $i <= 1; $i++) {
    if ($i == 0) {
        $idPCGA = PCGAManager::getIdByNumcompte("512");
        $montant = $_POST['banque'];
    } else {
        $idPCGA = PCGAManager::getIdByNumcompte("53");
        $montant = $_POST['caisse'];
    }
    
    // // ADD LigneEcriture :
    $ligne = new LigneEcriture(["montant" => $montant, "sens" => "Débit", "idEcriture" => $idEcriture, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);
}

header("refresh:2,url=index.php?action=tableauBord");
