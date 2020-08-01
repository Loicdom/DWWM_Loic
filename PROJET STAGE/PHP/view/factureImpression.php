<?php
$date_mini = $_POST['date1'];
$date_maxi = $_POST['date2'];
$listeIdFact = EcrituresManager::getListIdFact($date_mini, $date_maxi);
?>
<div class="fact_contenu">
    <?php
    foreach ($listeIdFact as $elt) {
        if (!empty($elt->getIdFacture())) {
    ?>
            <div class="conteneur_fact">
                <div class="visuelFactimpression"><?php $facture = FacturesManager::getById($elt->getIdFacture());
                                                    echo $facture->getLibelleFact() ?> </div>
                <div class="visuelFactImgImpression"><img src="<?php $facture = FacturesManager::getById($elt->getIdFacture());
                                                                echo $facture->getEnregFact() ?>" class="imgFactImpression" alt="facture"></div>

            </div>
    <?php }
    }
    ?>
</div>
<div class="bouton btn" id="btn1">Imprimer</div>

<a href="index.php?action=dateImpresFact">
    <div class="bouton btn" id="btnRetour">Retour</div>
</a>