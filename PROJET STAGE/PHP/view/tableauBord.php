<!-- tableau de bord : a rajouter le résultat en caisse et banque quand code partie compta fini -->
<?php
$years =ExerciceComptableManager::getById($annee);
$date1 = $years->getLibelleExercice()."-01-01";
$date2 = $years->getLibelleExercice()."-12-31";
?>
<div class="tableauBord">
        <div class="bienvenue">Bienvenue sur l'application web de comptabilité de la ferme d'animations éducatives des rives de l'Aa !</div>
        <div class="conteneurResultat">
            <div class="resultat">
                <div class="titreReultat">Résultat en caisse :</div>
                <div class="resultatSomme">
                    <?php 
                    $array_caisse = EcrituresComptableManager::getListParCompte($date1, $date2, '53');
                    $somme_caisse = 0;
                    for($i=0;$i<count($array_caisse);$i++) {
                        if($array_caisse[$i]->getSens() == 'Débit') {
                            $somme_caisse = $somme_caisse + $array_caisse[$i]->getMontant();
                        } else {
                            $somme_caisse = $somme_caisse - $array_caisse[$i]->getMontant();
                        }
                    }
                    echo $somme_caisse;
                    ?>
                </div>
            </div>
            <div class="resultat">
                <div class="titreReultat">Résultat en banque :</div>
                <div class="resultatSomme">
                <?php 
                    $array_banque = EcrituresComptableManager::getListParCompte($date1, $date2, '512');
                    $somme_banque = 0;
                    for($i=0;$i<count($array_banque);$i++) {
                        if($array_banque[$i]->getSens() == 'Débit') {
                            $somme_banque = $somme_banque + $array_banque[$i]->getMontant();
                        } else {
                            $somme_banque = $somme_banque - $array_banque[$i]->getMontant();
                        }
                    }
                    echo $somme_banque;
                    ?>
                </div>
            </div>
        </div>
        <a href="https://www.creditmutuel.fr/fr/authentification.html" target="_blank">
            <div class="bouton btn_CreditMut">Lien vers le Crédit Mutuel</div>
        </a>
    </div>
