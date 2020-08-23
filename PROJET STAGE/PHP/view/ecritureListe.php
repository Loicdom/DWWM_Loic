<?php
$journal = $_GET["j"];
$ecritures = EcrituresManager::getList($annee, $journal); // on récupere la liste des ecritures
?>
<?php if ($role == 1) { ?>
    <a href="index.php?action=ecritureForm&j=<?php echo $journal ?>">
        <div class="bouton btn"> Ajouter les lignes</div>
    </a>
<?php } ?>
<?php
if (!empty($ecritures)) { //Si rien dans ecritures on affiche pas se qu'il y a en dessous
?>

    <div class="contenu-ecriture">
        <div class="ligne">
            <div class="divTitre">Date</div>
            <div class="divTitre">Libellé écriture</div>
            <?php if ($journal == "charges" || $journal == "recettes") {
                echo '<div class="divTitre">Facture</div>';
            } ?>
            <div class="divTitre">Lignes d'écriture</div>
            <?php if ($role == 1) { ?>
                <div class="divTitre">Supprimer</div>
            <?php } ?>
        </div>
        <?php
        foreach ($ecritures as $elt) { // on fait une boucle pour afficher toutes les ecritures
        ?>
            <div class="ligne">
                <div class="bloc contenuListe"><?php echo $elt->getDateEcriture() ?></div>
                <div class="bloc contenuListe"><?php echo $elt->getLibelleEcriture() ?></div>
                <?php if ($journal == "charges" || $journal == "recettes") { ?>
                    <a href="index.php?action=visuelFacture&j=<?php echo $journal ?>&id=<?php echo $elt->getIdFacture() ?>" class="bloc">
                        <div class="bouton">Voir facture</div>
                    </a>
                <?php } ?>
                <a href="index.php?action=visuelLigne&j=<?php echo $journal ?>&id=<?php echo $elt->getIdEcriture() ?>" class="bloc">
                    <div class="bouton">Voir lignes d'écriture</div>
                </a>
                <?php if ($role == 1) { ?>
                    <a href="index.php?action=suppressionEcriture&j=<?php echo $journal ?>&id=<?php echo $elt->getIdEcriture() ?>" class="bloc">
                        <div class="bouton">Supprimer</div>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
    <?php } ?>
    <a href="index.php?action=tableauBord">
        <div class="bouton btn bouton_ecriture">Retour</div>
    </a>