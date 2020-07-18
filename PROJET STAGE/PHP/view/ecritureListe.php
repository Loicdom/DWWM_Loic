<?php

$ecritures = EcrituresManager::getList(); // on récupere le plan comptable (la liste des ecritures)
?>
<a href="index.php?action=ecritureForm&m=ajout">
    <div class="bouton btn"> Ajouter les lignes</div>
</a>

<?php
if (!empty($ecritures)) { //Si rien dans ecritures on affiche pas se qu'il y a en dessous
?>

<div class="contenu-ecriture">
        <div class="ligne">
            <div class="divTitre">Date</div>
            <div class="divTitre">Libellé écriture</div>
            <div class="divTitre">Facture</div>
            <div class="divTitre">Voir ligne d'écritures</div>
            <div class="divTitre">Supprimer</div>
        </div>
    <?php
    foreach ($ecritures as $elt) { // on fait une boucle pour afficher tout les ecritures
    ?>
        <div class="ligne">
            <div class="bloc contenuListe"><?php echo $elt->getDateEcriture() ?></div>
            <div class="bloc contenuListe"><?php echo $elt->getLibelleEcriture() ?></div>
            <a href="index.php?action=visuelFacture&m=suppr&id=<?php echo $elt->getIdFacture() ?>" class="bloc">
                <div class="bouton">Voir facture</div>
            <a href="index.php?action=visuelLigne&id=<?php echo $elt->getIdEcriture() ?>" class="bloc">
                <div class="bouton">Voir ligne d'écritures</div>
            </a>
            <a href="index.php?action=ecritureForm&m=suppr&id=<?php echo $elt->getIdEcriture() ?>" class="bloc">
                <div class="bouton">Supprimer</div>
            </a>
        </div>
    <?php } ?>
<?php } ?>
    <a href="index.php?action=tableauBord">
        <div class="bouton btn bouton_ecriture">Retour</div>
    </a>
