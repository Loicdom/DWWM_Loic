<?php
$typeEcriture = $_GET["j"];
$libelleAnnee = ExerciceComptableManager::getById($annee);
$date = $libelleAnnee->getLibelleExercice() . "/01/01";
$e = new Ecritures(["typeEcriture" => $typeEcriture, "dateEcriture" => $date, "libelleEcriture" => "Montant de départ", "idExerciceComptable" => $annee]);
EcrituresManager::add($e);
$idEcriture = EcrituresManager::getMaxIdEcriture();

for ($i = 0; $i < 2; $i++) {
    if ($i == 0) {
        $idPCGA_banque = PCGAManager::getIdByNumcompte("512");
        $montant_banque = $_POST['banque'];
        $ligne_banque = new LigneEcriture(["montant" => $montant_banque, "sens" => "Débit", "idEcriture" => $idEcriture, "idPCGA" => $idPCGA_banque]);
        LigneEcritureManager::add($ligne_banque);
    } else {
        $idPCGA_caisse = PCGAManager::getIdByNumcompte("53");
        $montant_caisse = $_POST['caisse'];
        $ligne_caisse = new LigneEcriture(["montant" => $montant_caisse, "sens" => "Débit", "idEcriture" => $idEcriture, "idPCGA" => $idPCGA_caisse]);
        LigneEcritureManager::add($ligne_caisse);
    }
}

header("refresh:2,url=index.php?action=tableauBord");
