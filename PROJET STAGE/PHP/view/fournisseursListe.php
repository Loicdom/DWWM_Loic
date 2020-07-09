<?php
$fournisseurs = FournisseursManager::getList(); //Ramène les informations (la liste) des fournisseurs pour pouvoir les afficher
?>
<a href="index.php?action=fournisseursForm&m=ajout">
    <div class="bouton btn"> Ajouter un fournisseur</div>
</a>

<?php
if (!empty($fournisseurs)) { //Si rien dans fournisseurs on affiche pas se qu'il y a en dessous
?>
    <div class="ligne">
        <div class="bloc titre">Code fournisseur</div>
        <div class="bloc titre">Libellé fournnisseur</div>
        <div class="bloc titre">Modifier</div>
        <div class="bloc titre">Supprimer</div>
    </div>
    <?php
    foreach ($fournisseurs as $elt) { // On fait une boucle pour afficher tout les fournisseurs
    ?>
        <div class="ligne">
            <div class="bloc contenuListe"><?php echo $elt->getCodeFournisseur() ?></div>
            <div class="bloc contenuListe"><?php echo $elt->getLibelleFournisseur() ?></div>
            <a href="index.php?action=fournisseursForm&m=modif&id=<?php echo $elt->getIdFournisseur() ?>" class="bloc">
                <div class="bouton">Modifier</div>
            </a>
            <a href="index.php?action=fournisseursForm&m=suppr&id=<?php echo $elt->getIdFournisseur() ?>" class="bloc">
                <div class="bouton">Supprimer</div>
            </a>
        </div>
    <?php } ?>
<?php } ?>
    <a href="index.php?action=tableauBord">
        <div class="bouton btn">Retour</div>
    </a>
