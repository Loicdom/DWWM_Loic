<?php
$mode = $_GET["m"];
$years = ExerciceComptableManager::getById($annee);
$dateEcriture = $years->getLibelleExercice() . '-01-01';
if ($mode == "ajout") {
    $e = new Ecritures(["typeEcriture" => 'budgetPrev', "dateEcriture" => $dateEcriture, "libelleEcriture" => 'Budget Previsionel ' . $years->getLibelleExercice(), "idFacture" => null, "idExerciceComptable" => $annee]);
    EcrituresManager::add($e);
    $idEcritureAjout = EcrituresManager::getMaxIdEcriture();

    $idPCGA = PCGAManager::getIdByNumcompte('6071');
    $ligne = new LigneEcriture(["montant" => $_POST['fournitureAtelierCreatif'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('6072');
    $ligne = new LigneEcriture(["montant" => $_POST['atelierCuisineGouter'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('421');
    $ligne = new LigneEcriture(["montant" => $_POST['salaireEmploye'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('616');
    $ligne = new LigneEcriture(["montant" => $_POST['assurance'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('60631');
    $ligne = new LigneEcriture(["montant" => $_POST['petitMateriel'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('60632');
    $ligne = new LigneEcriture(["montant" => $_POST['entretienMaterielJadin'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('6451');
    $ligne = new LigneEcriture(["montant" => $_POST['ursaff'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('626');
    $ligne = new LigneEcriture(["montant" => $_POST['fraisPostauxTel'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('627');
    $ligne = new LigneEcriture(["montant" => $_POST['fraisBancaires'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('60222');
    $ligne = new LigneEcriture(["montant" => $_POST['produitEntretien'], "sens" => 'Débit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('441');
    $ligne = new LigneEcriture(["montant" => $_POST['subvMunicipale'], "sens" => 'Crédit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('7061');
    $ligne = new LigneEcriture(["montant" => $_POST['produitManif'], "sens" => 'Crédit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('7062');
    $ligne = new LigneEcriture(["montant" => $_POST['participationFamille'], "sens" => 'Crédit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('7063');
    $ligne = new LigneEcriture(["montant" => $_POST['anniversaire'], "sens" => 'Crédit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('756');
    $ligne = new LigneEcriture(["montant" => $_POST['adhesion'], "sens" => 'Crédit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);

    $idPCGA = PCGAManager::getIdByNumcompte('7064');
    $ligne = new LigneEcriture(["montant" => $_POST['participationIME'], "sens" => 'Crédit', "idEcriture" => $idEcritureAjout, "idPCGA" => $idPCGA]);
    LigneEcritureManager::add($ligne);
}

if ($mode == "modif") {
    $idEcritureBudget = EcrituresManager::getByIdparType($annee);
    $idEcritureBudget = $idEcritureBudget->getIdEcriture();

    $idPCGA = PCGAManager::getIdByNumcompte('6071');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['fournitureAtelierCreatif']);

    //Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('6072');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['atelierCuisineGouter']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('421');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['salaireEmploye']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('616');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['assurance']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('60631');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['petitMateriel']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('60632');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['entretienMaterielJadin']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('6451');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['ursaff']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('626');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['fraisPostauxTel']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('627');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['fraisBancaires']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('60222');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['produitEntretien']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('441');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['subvMunicipale']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('7061');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['produitManif']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('7062');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['participationFamille']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('7063');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['anniversaire']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('756');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['adhesion']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('7064');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $modifLigne->setMontant($_POST['participationIME']);

    // Update LigneEcritureManager :
    LigneEcritureManager::update($modifLigne);
}

if ($mode == "suppr") {
    $idEcritureBudget = EcrituresManager::getByIdparType($annee);
    $idEcritureBudget = $idEcritureBudget->getIdEcriture();

    $idPCGA = PCGAManager::getIdByNumcompte('6071');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('6072');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('421');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('616');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('60631');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('60632');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('6451');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('626');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('627');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('60222');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('441');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('7061');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('7062');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('7063');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('756');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    $idPCGA = PCGAManager::getIdByNumcompte('7064');
    $modifLigne = LigneEcritureManager::getByIdEcritureNumcompte($idEcritureBudget, $idPCGA);
    $idLigne = $modifLigne->getIdLigneEcriture();
    LigneEcritureManager::delete($idLigne);

    EcrituresManager::delete($idEcritureBudget);
}

header("location:index.php?action=budgetPrevisionnel");
