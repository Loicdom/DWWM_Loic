<?php
$years = ExerciceComptableManager::getById($annee);
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

$listeEcriture = EcrituresComptableManager::getList();

if (!empty($listeEcriture)) { //Si rien dans fournisseurs on affiche pas se qu'il y a en dessous
?>

    <div class="budgetPrev">
        <div class="colonne">
            <div class="debitCreditBilan">Débit :</div>
            <div class="blocColonneTitreBilan">Année</div>
            <div class="blocColonneTitreBilan">Fournitures ateliers créatifs</div>
            <div class="blocColonneTitreBilan">Goûters, ateliers cuisine et frais de réception</div>
            <div class="blocColonneTitreBilan">Salaire Employé</div>
            <div class="blocColonneTitreBilan">Assurances</div>
            <div class="blocColonneTitreBilan">Achats petits matériels</div>
            <div class="blocColonneTitreBilan">Entretien jardin et matériels jardin</div>
            <div class="blocColonneTitreBilan">Cotisation URSSAF</div>
            <div class="blocColonneTitreBilan">Frais postaux et téléphone</div>
            <div class="blocColonneTitreBilan">Frais bancaires</div>
            <div class="blocColonneTitreBilan">Produits d'entretiens</div>
            <div class="debitCreditBilan">Crédit :</div>
            <div class="blocColonneTitreBilan">Subvention Municipale</div>
            <div class="blocColonneTitreBilan">Produit de manifestation</div>
            <div class="blocColonneTitreBilan">Participation des familles</div>
            <div class="blocColonneTitreBilan">Anniversaire</div>
            <div class="blocColonneTitreBilan">Adhésion Ferme</div>
            <div class="blocColonneTitreBilan">Participation IME</div>
        </div>

        <div class="colonne">
            <div class="blocColonneBilan">Prévisions (Charges)</div>
            <div class="blocColonneBilan"><?php echo $years->getLibelleExercice(); ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'6071');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'6072');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'421');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'616');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'60631');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'60632');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'6451');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'626');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'627');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'60222');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan">Prévisions (Recettes)</div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompteSubv($date1,$date2,'441');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'7061');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'7062');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'7063');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
            $montant = EcrituresComptableManager::getListParCompte($date1,$date2,'756');
            $taille = count($montant);
            $somme = 0;
            for ($i = 0; $i < $taille; $i++) {
                $somme = $somme + $montant[$i]->getMontant();
            }
            $somme = round($somme);
            echo $somme;
            ?></div>
            <div class="blocColonneBilan"><?php
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

<a href="index.php?action=dateBilanJournauxImpession&m=bilan">
    <div class="bouton btn" id="btnRetour">Retour</div>
</a>