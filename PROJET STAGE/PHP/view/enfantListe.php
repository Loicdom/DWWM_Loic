<?php

$bénévoles = PersonnesManager::getListByEnfant();
?>
<a href="index.php?action=enfantForm&m=ajout">
    <div class="bouton btn"> Ajouter un bénévole</div>
</a>


<div class="contenu-liste">
        <div class="ligne">
            <div class="bloc titre">Nom</div>
            <div class="bloc titre">Prénom</div>
            <div class="bloc titre">Date de naissance</div>
            <div class="bloc titre">lieu de naissance</div>
            <div class="bloc titre">adresse</div>
            <div class="bloc titre">Code postal</div>
            <div class="bloc titre">Ville</div>
            <div class="bloc titre">Email</div>
            <div class="bloc titre">Téléphone</div>
            <div class="bloc titre">Autorisation photos</div>
            <div class="bloc titre">Paiement inscription</div>
            <div class="bloc titre">Nom représentant légal</div>
            <div class="bloc titre">Prénom représentant légal</div>
            <div class="bloc titre">Remarque</div>
            <div class="bloc titre">Modifier</div>
            <div class="bloc titre">Supprimer</div>
        </div>
<?php
foreach ($bénévoles as $elt) {
?>
    <div class="ligne">
        <div class="bloc contenuListe"><?php echo $elt->getNomPersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getPrenomPersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getDateNaissPersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getLieuNaissPersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getAdressePersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getCpPersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getVillePersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getEmailPersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getTelPersonne() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getAutorisationPhotos() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getPaiementInscription() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getNomRepresentantLegal() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getPrenomRepresentantLegal() ?></div>
        <div class="bloc contenuListe"><?php echo $elt->getRemarquePersonne() ?></div>
        <a href="index.php?action=enfantForm&m=modif&id=<?php echo $elt->getIdPersonne() ?>" class="bloc">
            <div class="bouton">Modifier</div>
        </a>
        <a href="index.php?action=enfantForm&m=suppr&id=<?php echo $elt->getIdPersonne() ?>" class="bloc">
            <div class="bouton">Supprimer</div>
        </a>
    </div>
<?php } ?>
<a href="index.php?action=tableauBord">
        <div class="bouton btn">Retour</div>
    </a>
