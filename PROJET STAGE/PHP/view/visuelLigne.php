<?php
$idEcriture = $_GET["id"];
$ligne = LigneEcritureManager::getByIdEcriture($idEcriture);
$ecriture = EcrituresManager::getById($idEcriture);
$journal = $_GET["j"];
?>

<?php
if (!empty($ligne)) { //Si rien dans ecritures on affiche pas se qu'il y a en dessous
?>

    <div class="contenu-ecriture">
        <div class="ligne">
            <div class="divTitre">Date</div>
            <div class="divTitre">Numéro compte</div>
            <div class="divTitre">Libellé compte</div>
            <div class="divTitre">Libellé écriture</div>
            <div class="divTitre">Débit</div>
            <div class="divTitre">Crédit</div>
        </div>
        <?php
        foreach ($ligne as $elt) { // on fait une boucle pour afficher tout les ecritures
        ?>
            <div class="ligne">
                <div class="bloc contenuLigneEcriture"><?php echo $ecriture->getDateEcriture() ?></div>
                <div class="bloc contenuLigneEcriture"><?php $comptes = PCGAManager::getById($elt->getIdPCGA());
                                                echo $comptes->getNumCompte() ?></div>
                <div class="bloc contenuLigneEcriture"><?php $comptes = PCGAManager::getById($elt->getIdPCGA());
                                                echo $comptes->getLibelleCompte() ?></div>
                <div class="bloc contenuLigneEcriture"><?php echo $ecriture->getLibelleEcriture() ?></div>
                <div class="bloc contenuLigneEcriture"><?php if ($elt->getSens() == "Débit") {
                                                    echo $elt->getMontant();
                                                } ?></div>
                <div class="bloc contenuLigneEcriture"><?php if ($elt->getSens() == "Crédit") {
                                                    echo $elt->getMontant();
                                                } ?></div>
            </div>
        <?php } ?>
    <?php } ?>

    <a href="index.php?action=ecritureListe&j=<?php echo $journal ?>">
        <div class="bouton">Retour</div>
    </a>