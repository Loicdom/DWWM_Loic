<?php
$mode = $_GET["m"];

echo '<div class="formulaire_budget">
        <form action="index.php?action=budgetPrevisionnelAction&m=' . $mode . '" method="POST">';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="fournitureAtelierCreatif">Fournitures ateliers créatifs : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="fournitureAtelierCreatif" name="fournitureAtelierCreatif" placeholder="Somme fourniture ateliers" required ';
if ($mode != "ajout") { 
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '6071');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="atelierCuisineGouter">Goûters, ateliers cuisine et frais de réception : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="atelierCuisineGouter" name="atelierCuisineGouter" placeholder="Somme cuisine goûter" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '6072'); 
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="salaireEmploye">Salaire Employé : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="salaireEmploye" name="salaireEmploye" placeholder="Somme pour salaire" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '421');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="assurance">Assurance : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="assurance" name="assurance" placeholder="Somme pour assurance" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '616');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="petitMateriel">Achats petits matériels : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="petitMateriel" name="petitMateriel" placeholder="Somme petit matériel" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '60631');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="entretienMaterielJadin">Entretien jardin et matériels jardin : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="entretienMaterielJadin" name="entretienMaterielJadin" placeholder="Somme pour jardin" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '60632');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="ursaff">Cotisation URSSAF : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="ursaff" name="ursaff" placeholder="Somme cotisation URSSAF" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '6451');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="fraisPostauxTel">Frais postaux et téléphone : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="fraisPostauxTel" name="fraisPostauxTel" placeholder="Somme frais postaux et téléphone" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '626');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="fraisBancaires">Frais bancaires : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="fraisBancaires" name="fraisBancaires" placeholder="Somme frais bancaires" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '627');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="produitEntretien">Produits d\'entretiens : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="produitEntretien" name="produitEntretien" placeholder="Somme pour Produits d\'entretiens" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '60222');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="subvMunicipale">Subvention Municipale : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="subvMunicipale" name="subvMunicipale" placeholder="Somme subvention municipale" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '441');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="produitManif">Produit de manifestation : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="produitManif" name="produitManif" placeholder="Somme produit de manifestation" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '7061');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="participationFamille">Participation des familles : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="participationFamille" name="participationFamille" placeholder="Somme participation des familles" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '7062');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="anniversaire">Anniversaire : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="anniversaire" name="anniversaire" placeholder="Somme anniversaire" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '7063');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="adhesion">Adhesion Ferme : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="adhesion" name="adhesion" placeholder="Somme pour adhesion" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '756');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '      <div class="budget_conteneur">  
                <label class="form_budget" for="participationIME">Participation IME : </label><br>
                <input class="inputform_budget" type="number" step="0.01" id="participationIME" name="participationIME" placeholder="Somme participationIME" required ';
if ($mode != "ajout") {
    $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '7064');
    echo 'value ="' . $budgetsPrev->getMontant() . '"';
}
echo '          >
        </div> ';
echo '          <div class="centrer">
                <button class="bouton btn_budget" id="submit" type="submit">';
switch ($mode) {
    case "ajout":
        echo 'Ajouter';
        break;
    case "modif":
        echo 'Modifier';
        break;
    case "suppr":
        echo 'Supprimer';
        break;
}
echo '          </button>
                </div>
            </form>
        </div>';
echo ' <a href="index.php?action=budgetPrevisionnel">
        <div class="bouton btn">Retour</div>
    </a>';
