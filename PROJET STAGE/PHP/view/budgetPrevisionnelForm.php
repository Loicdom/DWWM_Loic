<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $BudgetPrev = BudgetsManager::getById($id); // si le mode est différent de l'ajout on récupère l'id du budget et on utilise la fonction qui ramène les information d'un budget en particulier pour pouvoir afficher ses informations
}
echo '<div class="formulaire">
        <form action="index.php?action=budgetPrevisionnelAction&m=' . $mode . '" method="POST">
            <div>
                <label class="form" for="annee">Annéee : </label><br>
                <input class="inputForm" type="text" id="annee" name="annee" placeholder="Année (ex : 2018-2019)"  required autofocus ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getAnnee() . '"';
}
echo '          >
        </div>';
if ($mode != "ajout") {
    echo '  <input type="number" id="idBudget" name="idBudget" hidden value = "' . $BudgetPrev->getIdBudget() . '"> ';
}
echo '      <div>  
                <label class="form" for="fournitureAtelierCreatif">Fournitures ateliers créatifs : </label><br>
                <input class="inputForm" type="text" id="fournitureAtelierCreatif" name="fournitureAtelierCreatif" placeholder="Somme fourniture ateliers" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getFournitureAtelierCreatif() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="atelierCuisineGouter">Goûters, ateliers cuisine et frais de réception : </label><br>
                <input class="inputForm" type="text" id="atelierCuisineGouter" name="atelierCuisineGouter" placeholder="Somme cuisine goûter" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getAtelierCuisineGouter() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="salaireEmploye">Salaire Employé : </label><br>
                <input class="inputForm" type="text" id="salaireEmploye" name="salaireEmploye" placeholder="Somme pour salaire" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getSalaireEmploye() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="assurance">Assurance : </label><br>
                <input class="inputForm" type="text" id="assurance" name="assurance" placeholder="Somme pour assurance" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getAssurance() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="petitMateriel">Achats petits matériels : </label><br>
                <input class="inputForm" type="text" id="petitMateriel" name="petitMateriel" placeholder="Somme petit matériel" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getPetitMateriel() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="entretienMaterielJadin">Entretien jardin et matériels jardin : </label><br>
                <input class="inputForm" type="text" id="entretienMaterielJadin" name="entretienMaterielJadin" placeholder="Somme pour jardin" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getEntretienMaterielJadin() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="ursaff">Cotisation URSSAF : </label><br>
                <input class="inputForm" type="text" id="ursaff" name="ursaff" placeholder="Somme cotisation URSSAF" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getUrsaff() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="fraisPostauxTel">Frais postaux et téléphone : </label><br>
                <input class="inputForm" type="text" id="fraisPostauxTel" name="fraisPostauxTel" placeholder="Somme frais postaux et téléphone" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getFraisPostauxTel() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="fraisBancaires">Frais bancaires : </label><br>
                <input class="inputForm" type="text" id="fraisBancaires" name="fraisBancaires" placeholder="Somme frais bancaires" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getFraisBancaires() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="produitEntretien">Produits d\'entretiens : </label><br>
                <input class="inputForm" type="text" id="produitEntretien" name="produitEntretien" placeholder="Somme pour Produits d\'entretiens" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getProduitEntretien() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="subvMunicipale">Subvention Municipale : </label><br>
                <input class="inputForm" type="text" id="subvMunicipale" name="subvMunicipale" placeholder="Somme subvention municipale" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getSubvMunicipale() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="produitManif">Produit de manifestation : </label><br>
                <input class="inputForm" type="text" id="produitManif" name="produitManif" placeholder="Somme produit de manifestation" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getProduitManif() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="participationFamille">Participation des familles : </label><br>
                <input class="inputForm" type="text" id="participationFamille" name="participationFamille" placeholder="Somme participation des familles" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getParticipationFamille() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="anniversaire">Anniversaire : </label><br>
                <input class="inputForm" type="text" id="anniversaire" name="anniversaire" placeholder="Somme anniversaire" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getAnniversaire() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="adhesion">Adhesion Ferme : </label><br>
                <input class="inputForm" type="text" id="adhesion" name="adhesion" placeholder="Somme pour adhesion" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getAdhesion() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="participationIME">Participation IME : </label><br>
                <input class="inputForm" type="text" id="participationIME" name="participationIME" placeholder="Somme participationIME" required ';
if ($mode != "ajout") {
    echo 'value ="' . $BudgetPrev->getParticipationIME() . '"';
}
echo '          >
        </div> ';
echo '          <div class="centrer">
                <button class="bouton" id="submit" type="submit">';
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
