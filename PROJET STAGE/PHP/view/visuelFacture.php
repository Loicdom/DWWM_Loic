<?php
$fact= $_GET["id"];
$facture = FacturesManager::getById($fact); 
$journal= $_GET["j"];
?>

<div class="visuelFact"><?php echo $facture->getLibelleFact() ?></div>
<div class="visuelFactImg"><img src="<?php echo $facture->getEnregFact() ?>" class="imgFact" alt="facture"></div>

<a href="index.php?action=ecritureListe&j=<?php echo $journal?>">
    <div class="bouton btn">Retour</div>
</a>