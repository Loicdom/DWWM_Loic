<?php
$documents = DocumentsManager::getList();
?>
<a href="index.php?action=documentForm">
    <div class="bouton btn"> Ajouter</div>
</a>
<div class="contenu-ecriture">
    <div class="ligne">
        <div class="divTitre">Libellé Document</div>
        <div class="divTitre">Voir</div>
    </div>
</div>
<?php
foreach ($documents as $elt) { // on fait une boucle pour afficher toutes les ecritures
?>
    <div class="ligne">
        <div class="bloc contenuListe"><?php echo $elt->getLibelleDocuments() ?></div>
        <a href="index.php?action=documentVisuel" class="bloc">
            <div class="bouton">Voir</div>
        </a>
    </div>
<?php } ?>
<a href="index.php?action=tableauBord">
    <div class="bouton btn">Retour</div>
</a>