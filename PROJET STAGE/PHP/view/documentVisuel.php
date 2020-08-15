<?php
$doc= $_GET["id"];
$facture = DocumentsManager::getById($doc); 
?>

<div class="visuelFact"><?php echo $facture->getLibelleDocument() ?></div>
<div class="visuelFactImg"><img src="<?php echo $facture->getEnregDocument() ?>" class="imgFact" alt="facture"></div>

<a href="index.php?action=documentListe">
    <div class="bouton btn_visuelfact">Retour</div>
</a>