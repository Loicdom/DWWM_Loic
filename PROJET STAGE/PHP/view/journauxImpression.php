<?php
$journal = $_GET['j'];
if (!empty($journal)) {
    $date_mini = $_POST['date1'];
    $date_maxi = $_POST['date2'];
    $visuelClasse = EcrituresComptableManager::getListParTypeDate($date_mini, $date_maxi, $journal);
?>
    <h3 id="h1_jounaux"><?php echo strtoupper($journal); ?></h3>
    <div class="ligne ligne_impression">
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
        <div class="ligne ligne_impression">
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
<?php } ?>

<div class="bouton btn" id="btn1">Imprimer</div>

<a href="index.php?action=impressionChoixListe">
    <div class="bouton btn" id="btnRetour">Retour</div>
</a>