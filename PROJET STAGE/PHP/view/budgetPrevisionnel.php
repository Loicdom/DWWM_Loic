<?php

$budgetsPrev = BudgetsManager::getList();  // Ramène la liste des budgets
?>

<a href="index.php?action=budgetPrevisionnelForm&m=ajout">
    <div class="bouton btn"> Ajouter le budget prévisionnel</div>
</a>

<div class="budgetPrev">
    <div class="colonne">
        <div class="debitCredit">Débit :</div>
        <div class="blocColonneTitre">Année</div>
        <div class="blocColonneTitre">Fournitures ateliers créatifs</div>
        <div class="blocColonneTitre">Goûters, ateliers cuisine et frais de réception</div>
        <div class="blocColonneTitre">Salaire Employé</div>
        <div class="blocColonneTitre">Assurances</div>
        <div class="blocColonneTitre">Achats petits matériels</div>
        <div class="blocColonneTitre">Entretien jardin et matériels jardin</div>
        <div class="blocColonneTitre">Cotisation URSSAF</div>
        <div class="blocColonneTitre">Frais postaux et téléphone</div>
        <div class="blocColonneTitre">Frais bancaires</div>
        <div class="blocColonneTitre">Produits d'entretiens</div>
        <div class="debitCredit">Crédit :</div>
        <div class="blocColonneTitre">Subvention Municipale</div>
        <div class="blocColonneTitre">Produit de manifestation</div>
        <div class="blocColonneTitre">Participation des familles</div>
        <div class="blocColonneTitre">Anniversaire</div>
        <div class="blocColonneTitre">Adhésion Ferme</div>
        <div class="blocColonneTitre">Participation IME</div>
        <div class="blocColonneTitre">Modifier</div>
        <div class="blocColonneTitre">Supprimer</div>
    </div>
    <?php
    foreach ($budgetsPrev as $elt) { // on boucle pour ramèner tout les budgets
    ?>
        <div class="colonne">
            <div class="blocColonne">Prévisions (Charges)</div>
            <div class="blocColonne"><?php echo $elt->getAnnee() ?></div>
            <div class="blocColonne"><?php echo $elt->getFournitureAtelierCreatif() ?></div>
            <div class="blocColonne"><?php echo $elt->getAtelierCuisineGouter() ?></div>
            <div class="blocColonne"><?php echo $elt->getSalaireEmploye() ?></div>
            <div class="blocColonne"><?php echo $elt->getAssurance() ?></div>
            <div class="blocColonne"><?php echo $elt->getPetitMateriel() ?></div>
            <div class="blocColonne"><?php echo $elt->getEntretienMaterielJadin() ?></div>
            <div class="blocColonne"><?php echo $elt->getUrsaff() ?></div>
            <div class="blocColonne"><?php echo $elt->getFraisPostauxTel() ?></div>
            <div class="blocColonne"><?php echo $elt->getFraisBancaires() ?></div>
            <div class="blocColonne"><?php echo $elt->getProduitEntretien() ?></div>
            <div class="blocColonne">Prévisions (Recettes)</div>
            <div class="blocColonne"><?php echo $elt->getSubvMunicipale() ?></div>
            <div class="blocColonne"><?php echo $elt->getProduitManif() ?></div>
            <div class="blocColonne"><?php echo $elt->getParticipationFamille() ?></div>
            <div class="blocColonne"><?php echo $elt->getAnniversaire() ?></div>
            <div class="blocColonne"><?php echo $elt->getAdhesion() ?></div>
            <div class="blocColonne"><?php echo $elt->getParticipationIME() ?></div>
            <a href="index.php?action=budgetPrevisionnelForm&m=modif&id=<?php echo $elt->getIdBudget() ?>" class="bloc">
                <div class="bouton ">Modifier</div>
            </a>
            <a href="index.php?action=budgetPrevisionnelForm&m=suppr&id=<?php echo $elt->getIdBudget() ?>" class="bloc">
                <div class="bouton enColonne">Supprimer</div>
            </a>
        </div>
        <?php } ?>
</div>

<a href="index.php?action=tableauBord">
    <div class="bouton btn">Retour</div>
</a>