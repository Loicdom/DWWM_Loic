<?php
$fact= $_GET["id"];
$facture = FacturesManager::getById($fact); 

?>

<div class="visuelFact"><?php echo $facture->getLibelleFact() ?></div>
<div class="visuelFactImg"><img src="<?php echo $facture->getEnregFact() ?>" class="imgFact" alt="facture"></div>