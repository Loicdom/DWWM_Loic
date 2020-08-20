<?php
$doc= $_GET["id"];
$document = DocumentsManager::getById($doc); 
?>

<div class="visuelFact"><?php echo $document->getLibelleDocument() ?></div>
<div class="visuelFactImg"><img src="<?php echo $document->getEnregDocument() ?>" class="imgFact" alt="document"></div>

<a href="index.php?action=documentListe">
    <div class="bouton btn_visuelfact">Retour</div>
</a>