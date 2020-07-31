<?php 

$tailleTiers = count(array_values($_POST['idEcriture']));
$tailleFinancier = count(array_values($_POST['idEcritureFinancier']));

for ($i = 0; $i < $tailleTiers; $i++) {
    $lettrage = $_POST['lettrage'][$i];
    if ($lettrage != '') {
        $m = EcrituresManager::getById($_POST['idEcriture'][$i]);
        $m->setLettrage($lettrage);
        EcrituresManager::update($m);
    }
}

for ($i = 0; $i < $tailleFinancier; $i++) {
    $lettrage = $_POST['lettrageFinancier'][$i];
    if ($lettrage != '') {
        $m = EcrituresManager::getById($_POST['idEcritureFinancier'][$i]);
        $m->setLettrage($lettrage);
        EcrituresManager::update($m);
    }
}
header("refresh:2,url=index.php?action=lettrage");