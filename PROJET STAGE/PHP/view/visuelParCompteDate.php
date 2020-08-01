<?php
$exerciceComptable = ExerciceComptableManager::getById($annee);
$classeComptable = ClasseComptableManager::getList();
$comptes = PCGAManager::getList();
?>
<div class="formulaire">
    <form action="index.php?action=visuelParCompte" method="POST">
        <div class="div_lettrage">
            <label class="form_lettrage" for="date1">De</label>
            <input class="inputForm_visuelCompte" type="date" name="date1" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required autofocus>
            <i class="far fa-question-circle" id="informationVisuelCompte" title="Choisir une classe pour voir tout les comptes de cette classe. (Si il faut un compte en particulier choisir un compte dans libellé correspondant à la classe avec le numéro de compte qui s'affiche)"></i>
        </div>
        <div class="div_lettrage">
            <label class="form_lettrage" for="date2">A</label>
            <input class="inputForm_visuelCompte" type="date" name="date2" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required>
        </div>
        <div class="div_ecriture">
                    <select name="classeComptable" id="classComptable" class="select_visuel_compte" required>
                        <option value="">Choix de tous les comptes d'une classe</option>
                        <?php
                        foreach ($classeComptable as $elt) {
                            echo "<option value='" . $elt->getNumeroClasseComptable() . "'>" . $elt->getLibelleClasseComptable() . "</option>";
                        } ?>
                    </select>
                    </div>
                <div class="div_ecriture">
                    <input class="inputForm_visuelCompte1" type="text" id="numCompte" name="numCompte" placeholder="Numéro du compte">
                </div>
                <div class="div_ecriture">
                    <select name="libelleCompte" id="libelleCompte" class="select_visuel_compte">
                        <option value="">Libellé d'un compte en particulier</option>
                        <?php
                        foreach ($comptes as $elmt) {
                            echo "<option value='" . $elmt->getNumCompte() . "'>" . $elmt->getLibelleCompte() . "</option>";
                        } ?>
                    </select>
                </div>
        <div class="div_lettrage">
                <button class="bouton" id="submit_visuelCompte" type="submit" value="Valider">Valider</button>
        </div>
    </form>
</div>
<a  href="index.php?action=tableauBord">
    <div class="bouton btn_visuelCompte">Retour</div>
</a>