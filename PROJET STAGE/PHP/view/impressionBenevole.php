<?php

$bénévoles = PersonnesManager::getListByBenevole(); // ramène la liste des bénévoles
?>

<?php
if (!empty($bénévoles)) { //Si rien dans comptes on imprime pas se qu'il y a en dessous
?>
    <div class="contenu-liste-impression">
        <div class="ligneTitre">
            <div class="bloc titre1">Nom</div>
            <div class="bloc titre1">Prénom</div>
            <div class="bloc titre1">Date de naissance</div>
            <div class="bloc titre1">Ville</div>
            <div class="bloc titre1">Email</div>
            <div class="bloc titre1">Téléphone</div>
            <div class="bloc titre1">Autorisation photos</div>
            <div class="bloc titre1">Bafa acquis</div>
            <div class="bloc titre1">Remarque</div>
            <div class="bloc titre1">Casier Judicaire</div>
        </div>
        <?php
        foreach ($bénévoles as $elt) { // On fait une boucle pour ramèner tout les bénévoles
        ?>
            <div class="ligneImpression">
                <div class="bloc contenuListe1"><?php echo $elt->getNomPersonne() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getPrenomPersonne() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getDateNaissPersonne() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getVille()->getLibelleVille() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getEmailPersonne() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getTelPersonne() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getAutorisationPhotos() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getBafaAquisBenevole() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getCasierJudiciaire() ?></div>
                <div class="bloc contenuListe1"><?php echo $elt->getRemarquePersonne() ?></div>
            </div>
        <?php } ?>
<?php } ?>
  
        <div class="bouton btn" id="btn1" >Imprimer</div>

        <a href="index.php?action=tableauBord">
        <div class="bouton btn" id="btnRetour">Retour</div>
    </a>
    