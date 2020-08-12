<?php
$annee = $_GET['n'];
$years = ExerciceComptableManager::getById($annee);
$date1 = $years->getLibelleExercice()."-01-01";
$date2 = $years->getLibelleExercice()."-12-31";

$listeEcriture = EcrituresComptableManager::getList();

if (!empty($listeEcriture)) { //Si rien dans fournisseurs on affiche pas se qu'il y a en dessous
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
        </div>

        <div class="colonne">
            <div class="blocColonne">Prévisions (Charges)</div>
            <div class="blocColonne"><?php echo $years->getLibelleExercice(); ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'6071');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'6072');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'421');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'616');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'60631');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'60632');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'6451');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'626');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'627');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'60222');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne">Prévisions (Recettes)</div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompteSubv($date1,$date2,'441');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'7061');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'7062');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'7063');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'756');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonne"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'7064');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
        </div>
    </div>
<?php } ?>

<div class="bouton btn" id="btn1">Imprimer</div>

<a href="index.php?action=tableauBord">
    <div class="bouton btn" id="btnRetour">Retour</div>
</a>