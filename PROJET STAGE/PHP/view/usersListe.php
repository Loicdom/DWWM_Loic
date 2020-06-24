<?php

$utilisateurs = UsersManager::getList();
?>
<a href="index.php?action=usersForm&m=ajout">
    <div class="bouton btn"> Ajouter un utilisateur</div>
</a>


<div class="ligne">
    <div class="bloc titre">Pseudo</div>
    <div class="bloc titre">Mot de passe</div>
    <div class="bloc titre">Rôle</div>
    <div class="bloc titre">Supprimer</div>
</div>
<?php
foreach ($utilisateurs as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenuListe"><?php echo $elt->getPseudo() ?></div>
        <div class="bloc contenuListe"><?php echo "****************" ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getRole() ?></div>
        <a href="index.php?action=usersForm&m=suppr&id=<?php echo $elt->getIdUser() ?>" class="bloc">
            <div class="bouton">Supprimer</div>
        </a>
    </div>
<?php } ?>
<a href="index.php?action=tableauBord">
    <div class="bouton btn">Retour</div>
</a>