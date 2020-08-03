<?php
$years = ExerciceComptableManager::getById($annee);
$budgets = EcrituresComptableManager::getList('budgetPrev');
if (empty($budgets)) {
?>
    <a href="index.php?action=budgetPrevisionnelForm&m=ajout">
        <div class="bouton btn"> Ajouter le budget prévisionnel</div>
    </a>
<?php
}
if (!empty($budgets)) { //Si rien dans fournisseurs on affiche pas se qu'il y a en dessous
?>

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
        
            <div class="colonne">
                <div class="blocColonne">Prévisions (Charges)</div>
                <div class="blocColonne"><?php echo $years->getLibelleExercice() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '6071'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '6072'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '421'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '616'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '60631'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '60632'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '6451'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '626'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '627'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '60222'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne">Prévisions (Recettes)</div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '441'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '7061'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '7062'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '7063'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '756'); echo $budgetsPrev->getMontant() ?></div>
                <div class="blocColonne"><?php $budgetsPrev = EcrituresComptableManager::getBybudget($annee, '7064'); echo $budgetsPrev->getMontant() ?></div>
                <a href="index.php?action=budgetPrevisionnelForm&m=modif" class="bloc">
                    <div class="bouton btn_prev ">Modifier</div>
                </a>
                <a href="index.php?action=budgetPrevisionnelForm&m=suppr" class="bloc">
                    <div class="bouton enColonne btn_prev">Supprimer</div>
                </a>
            </div>
    </div>
<?php } ?>
<a href="index.php?action=tableauBord">
    <div class="bouton btn">Retour</div>
</a>