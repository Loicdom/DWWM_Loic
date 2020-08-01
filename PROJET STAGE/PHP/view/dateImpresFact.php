<?php
$exerciceComptable = ExerciceComptableManager::getById($annee);
?>
<div class="formulaire">
    <form action="index.php?action=factureImpression" method="POST">
        <div class="div_lettrage">
            <label class="form_lettrage" for="date1">De</label>
            <input class="inputForm_visuelCompte" type="date" name="date1" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required autofocus>
        </div>
        <div class="div_lettrage">
            <label class="form_lettrage" for="date2">A</label>
            <input class="inputForm_visuelCompte" type="date" name="date2" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required>
        </div>
        <div class="div_lettrage">
                <button class="bouton" id="submit_visuelCompte" type="submit" value="Valider">Valider</button>
        </div>
    </form>
</div>
<a  href="index.php?action=tableauBord">
    <div class="bouton btn_impressionfacture">Retour</div>
</a>