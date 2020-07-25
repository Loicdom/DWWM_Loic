<?php
$idEcriture = $_GET["id"];
$journal = $_GET["j"];
?>

<h1>Cette action entrainera la suppression définitive de l'écriture et de ses lignes. Souhaitez-vous supprimer cette écriture ?</h1>

<div class="divSuppr">
<a href="index.php?action=suppressionAction&j=<?php echo $journal ?>&id=<?php echo $idEcriture ?>" class="bloc">
    <div class="bouton btnSuppr">Supprimer</div>
</a>
<a href="index.php?action=ecritureListe&j=<?php echo $journal ?>&id=<?php echo $idEcriture ?>" class="bloc">
    <div class="bouton btnSuppr">Retour</div>
</a>
</div>