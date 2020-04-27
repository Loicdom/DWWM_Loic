<?php

$clients = ClientManager::getList();
?>
<div class="ligne">
    <div class="bloc titre">Nom</div>
    <div class="bloc titre">Prenom</div>
    <div class="bloc titre">Adresse</div>
    <div class="bloc titre">Ville</div>
    <div class="bloc titre"> </div>

</div>
<?php
foreach ($clients as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenu"><?php echo $elt->getNomClient() ?></div>
        <div class="bloc contenu"><?php echo $elt->getPrenomClient() ?></div>
        <div class="bloc contenu"><?php echo $elt->getAdresseClient() ?></div>
        <div class="bloc contenu"><?php echo $elt->getVilleClient() ?></div>
        <a href="index.php?action=ClientForm&m=modif&id=<?php echo $elt->getIdClient() ?>">
            <div class="bouton">Modifier</div>
        </a>
        <?php
        if ($lvl == 2) {
            echo    '<a href="index.php?action=ClientForm&m=suppr&id=' . $elt->getIdClient() . '">
                            <div class="bouton">Supprimer</div>
                        </a>';
        } ?>
    </div>
<?php } ?>
<div class="ligne">
    <div>Total : </div>
    <div id="total"></div>
</div>
<a href="index.php?action=ClientForm&m=ajout">
    <div class="bouton"> Ajouter un client</div>
</a>