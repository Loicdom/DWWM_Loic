<?php
$idDocument = $_GET["id"];
?>

<h1>Cette action entrainera la suppression définitive du document. Souhaitez-vous supprimer ce document ?</h1>

<div class="divSuppr">
<a href="index.php?action=suppressionDocument&id=<?php echo $idDocument ?>" class="bloc">
    <div class="bouton btnSuppr">Supprimer</div>
</a>
<a href="index.php?action=documentListe" class="bloc">
    <div class="bouton btnSuppr">Retour</div>
</a>
</div>