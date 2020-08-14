<?php 
if(empty($_GET['e'])) { ?>
<div id="div_choix_conteneur">
<a  href="index.php?action=dateBilanJournauxImpession&m=jounaux&j=charges">
    <div class="bouton btn_choix">Charges</div>
</a>
<a  href="index.php?action=dateBilanJournauxImpession&m=jounaux&j=recettes">
    <div class="bouton btn_choix">Recettes</div>
</a>
<a  href="index.php?action=dateBilanJournauxImpession&m=jounaux&j=banque">
    <div class="bouton btn_choix">Banque</div>
</a>
<a  href="index.php?action=dateBilanJournauxImpession&m=jounaux&j=caisse">
    <div class="bouton btn_choix">Caisse</div>
</a>
</div>
<a  href="index.php?action=tableauBord">
    <div class="bouton btn_impressionfacture">Retour</div>
</a>
<?php
} else { ?>
    <div id="div_choix_conteneur">
<a  href="index.php?action=dateBilanJournauxImpession&m=jounaux&j=charges&e=export">
    <div class="bouton btn_choix">Charges</div>
</a>
<a  href="index.php?action=dateBilanJournauxImpession&m=jounaux&j=recettes&e=export">
    <div class="bouton btn_choix">Recettes</div>
</a>
<a  href="index.php?action=dateBilanJournauxImpession&m=jounaux&j=banque&e=export">
    <div class="bouton btn_choix">Banque</div>
</a>
<a  href="index.php?action=dateBilanJournauxImpession&m=jounaux&j=caisse&e=export">
    <div class="bouton btn_choix">Caisse</div>
</a>
</div>
<a  href="index.php?action=tableauBord">
    <div class="bouton btn_impressionfacture">Retour</div>
</a>
<?php
}
?>
