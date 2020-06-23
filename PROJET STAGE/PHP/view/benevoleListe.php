<?php

$fournisseurs = PersonnesManager::getListByBenevole();
?>
<a href="index.php?action=benevoleForm&m=ajout">
    <div class="bouton btn"> Ajouter un fournisseur</div>
</a>


<div class="ligne">
    <div class="bloc titre">Code fournisseur</div>
    <div class="bloc titre">Libellé fournnisseur</div>
    <div class="bloc titre">Modifier</div>
    <div class="bloc titre">Supprimer</div>
</div>
<?php
foreach ($fournisseurs as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenuListe"><?php echo $elt->getCodeFournisseur() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getLibelleFournisseur() ?></div>
        <a href="index.php?action=benevoleForm&m=modif&id=<?php echo $elt->getIdFournisseur() ?>" class="bloc">
            <div class="bouton">Modifier</div>
        </a>
        <a href="index.php?action=benevoleForm&m=suppr&id=<?php echo $elt->getIdFournisseur() ?>" class="bloc">
            <div class="bouton">Supprimer</div>
        </a>
    </div>
<?php } ?>
