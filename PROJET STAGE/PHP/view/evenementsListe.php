<?php
$evenements = EvenementsManager::getList(); //Ramène les informations (la liste) des évènements pour pouvoir les afficher
?>
<a href="index.php?action=evenementsForm&m=ajout">
    <div class="bouton btn"> Ajouter un évènement</div>
</a>

<?php
if (!empty($evenements)) { //Si rien dans evenements on affiche pas se qu'il y a en dessous
?>
    <div class="ligne">
        <div class="bloc titre">Code évènement</div>
        <div class="bloc titre">Libellé évènement</div>
        <div class="bloc titre">Modifier</div>
        <div class="bloc titre">Supprimer</div>
    </div>
    <?php
    foreach ($evenements as $elt) { // On fait une boucle pour afficher tout les évènements
    ?>
        <div class="ligne">
            <div class="bloc contenuListe"><?php echo $elt->getCodeEvenement() ?></div>
            <div class="bloc contenuListe"><?php echo $elt->getLibelleEvenement() ?></div>
            <a href="index.php?action=evenementsForm&m=modif&id=<?php echo $elt->getIdEvenement() ?>" class="bloc">
                <div class="bouton">Modifier</div>
            </a>
            <a href="index.php?action=evenementsForm&m=suppr&id=<?php echo $elt->getIdEvenement() ?>" class="bloc">
                <div class="bouton">Supprimer</div>
            </a>
        </div>
    <?php } ?>
<?php } ?>
    <a href="index.php?action=tableauBord">
        <div class="bouton btn">Retour</div>
    </a>
