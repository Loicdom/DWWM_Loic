<?php
if (empty($_POST['numCompte'])) {
    $classeComptable = $_POST['classeComptable'];
    $date_mini = $_POST['date1'];
    $date_maxi = $_POST['date2'];
    $visuelClasse = EcrituresComptableManager::getListVisuelParClasse($date_mini, $date_maxi, $classeComptable);
?>
    <div class="ligne">
        <div class="divTitreLettrage">Date</div>
        <div class="divTitreLettrage">Numéro du compte</div>
        <div class="divTitreLettrage">Libellé du compte</div>
        <div class="divTitreLettrage">Libellé de l'écriture</div>
        <div class="divTitreLettrage">Débit</div>
        <div class="divTitreLettrage">Crédit</div>
    </div>
    <?php
    foreach ($visuelClasse as $elt) { // on fait une boucle pour afficher tout les ecritures
    ?>
        <div class="ligne">
            <div class="bloc contenuLigneEcriture"><?php echo $elt->getDateEcriture() ?></div>
            <div class="bloc contenuLigneEcriture"><?php echo $elt->getNumCompte() ?></div>
            <div class="bloc contenuLigneEcriture"><?php echo $elt->getLibelleCompte() ?></div>
            <div class="bloc contenuLigneEcriture"><?php echo $elt->getLibelleEcriture() ?></div>
            <div class="bloc contenuLigneEcriture"><?php if ($elt->getSens() == "Débit") {
                                                        echo $elt->getMontant();
                                                    } ?></div>
            <div class="bloc contenuLigneEcriture"><?php if ($elt->getSens() == "Crédit") {
                                                        echo $elt->getMontant();
                                                    } ?></div>
        </div>
    <?php } ?>
    <a href="index.php?action=visuelParCompteDate">
        <div class="bouton btn_lettrage">Retour</div>
    </a>
<?php
} else {
    $numCompte = $_POST['numCompte'];
    $date_mini = $_POST['date1'];
    $date_maxi = $_POST['date2'];
    $visuelClasse = EcrituresComptableManager::getListVisuelParCompte($date_mini, $date_maxi, $numCompte);
?>
    <div class="ligne">
        <div class="divTitreLettrage">Date</div>
        <div class="divTitreLettrage">Numéro du compte</div>
        <div class="divTitreLettrage">Libellé du compte</div>
        <div class="divTitreLettrage">Libellé de l'écriture</div>
        <div class="divTitreLettrage">Débit</div>
        <div class="divTitreLettrage">Crédit</div>
    </div>
    <?php
    foreach ($visuelClasse as $elt) { // on fait une boucle pour afficher tout les ecritures
    ?>
        <div class="ligne">
            <div class="bloc contenuLigneEcriture"><?php echo $elt->getDateEcriture() ?></div>
            <div class="bloc contenuLigneEcriture"><?php echo $elt->getNumCompte() ?></div>
            <div class="bloc contenuLigneEcriture"><?php echo $elt->getLibelleCompte() ?></div>
            <div class="bloc contenuLigneEcriture"><?php echo $elt->getLibelleEcriture() ?></div>
            <div class="bloc contenuLigneEcriture"><?php if ($elt->getSens() == "Débit") {
                                                        echo $elt->getMontant();
                                                    } ?></div>
            <div class="bloc contenuLigneEcriture"><?php if ($elt->getSens() == "Crédit") {
                                                        echo $elt->getMontant();
                                                    } ?></div>
        </div>
    <?php } ?>
    <a href="index.php?action=visuelParCompteDate">
        <div class="bouton btn_lettrage">Retour</div>
    </a>
<?php } ?>