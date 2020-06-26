<?php

$comptes = PCGAManager::getList();
?>
<a href="index.php?action=planComptableForm&m=ajout">
    <div class="bouton btn"> Ajouter un fournisseur</div>
</a>


<div class="ligne">
    <div class="bloc titre">Numéro compte</div>
    <div class="bloc titre">Libellé compte</div>
    <div class="bloc titre">Libellé classe comptable</div>
    <div class="bloc titre">Modifier</div>
    <div class="bloc titre">Supprimer</div>
</div>
<?php
foreach ($comptes as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenuListe"><?php echo $elt->getNumCompte() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getLibelleCompte() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getClasseComptable()->getLibelleClasseComptable() ?></div>
        <a href="index.php?action=planComptableForm&m=modif&id=<?php echo $elt->getIdPCGA() ?>" class="bloc">
            <div class="bouton">Modifier</div>
        </a>
        <a href="index.php?action=planComptableForm&m=suppr&id=<?php echo $elt->getIdPCGA() ?>" class="bloc">
            <div class="bouton">Supprimer</div>
        </a>
    </div>
<?php } ?>
<a href="index.php?action=tableauBord">
    <div class="bouton btn">Retour</div>
</a>