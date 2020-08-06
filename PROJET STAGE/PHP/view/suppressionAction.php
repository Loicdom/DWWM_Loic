<?php
$idEcriture = $_GET["id"];
$ligne = LigneEcritureManager::getByIdEcriture($idEcriture); // pour récupèrer les lignes en fonction de l'idEcriture
$ecriture = EcrituresManager::getById($idEcriture);
$journal = $_GET["j"];

foreach ($ligne as $elt) { // on fait une boucle pour afficher tout les ecritures
    $idligneEcriture = $elt->getIdLigneEcriture();
    LigneEcritureManager::delete($idligneEcriture);
}

EcrituresManager::delete($idEcriture);
$idfacture = $ecriture->getIdFacture();
FacturesManager::delete($idfacture);


header("location:index.php?action=ecritureListe&j=$journal"); // renvoi vers ecriture liste, juste après avoir exécuter la page
