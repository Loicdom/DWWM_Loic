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
        <div class="divTitre">Supprimer</div>
    </div>
</div>
<?php
foreach ($documents as $elt) { // on fait une boucle pour afficher toutes les ecritures
?>
    <div class="ligne">
        <div class="bloc contenuListe"><?php echo $elt->getLibelleDocument() ?></div>
        <a href="index.php?action=documentVisuel&id=<?php echo $elt->getIdDocument() ?>" class="bloc">
            <div class="bouton btn_doc">Voir</div>
        </a>
        <a href="index.php?action=suppressionDocumentconfirmation&id=<?php echo $elt->getIdDocument() ?>" class="bloc">
            <div class="bouton btn_doc">Supprimer</div>
        </a>
    </div>
<?php } ?>
<a href="index.php?action=tableauBord">
    <div class="bouton btn">Retour</div>
</a>