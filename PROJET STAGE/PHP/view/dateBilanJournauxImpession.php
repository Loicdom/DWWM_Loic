<?php
$choix = $_GET['m'];
$exerciceComptable = ExerciceComptableManager::getById($annee);
if ($choix == "bilan") {
?>
    <div class="formulaire">
        <form action="index.php?action=bilanImpression" method="POST">
            <div class="div_lettrage">
                <label class="form_lettrage" for="date1">De</label>
                <input class="inputForm_visuelCompte" type="date" id="date1" name="date1" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required autofocus>
            </div>
            <div class="div_lettrage">
                <label class="form_lettrage" for="date2">A</label>
                <input class="inputForm_visuelCompte" type="date" id="date2" name="date2" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required>
            </div>
            <div class="div_lettrage">
                <label class="form_lettrage" for="tous">Toutes l'année ?</label>
                <input class="inputForm_visuelCompte" type="checkbox" id="tous" value='anneeComplet' name="tous" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31">
            </div>
            <div class="div_lettrage">
                <button class="bouton" id="submit_visuelCompte" type="submit" value="Valider">Valider</button>
            </div>
        </form>
    </div>
<?php } else if (empty($_GET['e'])) {
    $jounal = $_GET['j'];
?>
    <div class="formulaire">
        <form action="index.php?action=journauxImpression&j=<?php echo $jounal ?>" method="POST">
            <div class="div_lettrage">
                <label class="form_lettrage" for="date1">De</label>
                <input class="inputForm_visuelCompte" type="date" id="date1" name="date1" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required autofocus>
            </div>
            <div class="div_lettrage">
                <label class="form_lettrage" for="date2">A</label>
                <input class="inputForm_visuelCompte" type="date" id="date2" name="date2" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required>
            </div>
            <div class="div_lettrage">
                <label class="form_lettrage" for="tous">Toutes l'année ?</label>
                <input class="inputForm_visuelCompte" type="checkbox" id="tous" value='anneeComplet' name="tous" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31">
            </div>
            <div class="div_lettrage">
                <button class="bouton" id="submit_visuelCompte" type="submit" value="Valider">Valider</button>
            </div>
        </form>
    </div>
<?php } else {
    $jounal = $_GET['j'];
?>
 <div class="formulaire">
        <form action="index.php?action=exportCsvJournaux&j=<?php echo $jounal ?>" method="POST">
            <div class="div_lettrage">
                <label class="form_lettrage" for="date1">De</label>
                <input class="inputForm_visuelCompte" type="date" id="date1" name="date1" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required autofocus>
            </div>
            <div class="div_lettrage">
                <label class="form_lettrage" for="date2">A</label>
                <input class="inputForm_visuelCompte" type="date" id="date2" name="date2" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required>
            </div>
            <div class="div_lettrage">
                <label class="form_lettrage" for="tous">Toutes l'année ?</label>
                <input class="inputForm_visuelCompte" type="checkbox" id="tous" value='anneeComplet' name="tous" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31">
            </div>
            <div class="div_lettrage">
                <button class="bouton" id="submit_visuelCompte" type="submit" value="Valider">Valider</button>
            </div>
        </form>
    </div>
<?php
} ?>
<a href="index.php?action=tableauBord">
    <div class="bouton btn_impressionfacture">Retour</div>
</a>