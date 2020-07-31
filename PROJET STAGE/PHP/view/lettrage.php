<?php
$exerciceComptable = ExerciceComptableManager::getById($annee);
?>
<div class="formulaire">
    <form action="index.php?action=lettrageForm" method="POST">
        <div class="div_lettrage">
            <label class="form_lettrage" for="date1">De</label>
            <input class="inputForm_lettrage" type="date" name="date1" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required autofocus>
        </div>
        <div class="div_lettrage">
            <label class="form_lettrage" for="date1">A</label>
            <input class="inputForm_lettrage" type="date" name="date2" min="<?php echo $exerciceComptable->getLibelleExercice() ?>-01-01" max="<?php echo $exerciceComptable->getLibelleExercice() ?>-12-31" required>
        </div>
        <div class="div_lettrage">
            <select name="choixCompte" id="choixCompteTiers" class="select_lettrage" required>
                <option value="">Choix compte de tiers</option>
                <option value="charges">Compte de tiers (charges)</option>
                <option value="recettes">Compte de tiers (recettes)</option>
            </select>
        </div>
        <div class="div_lettrage">
            <select name="choixCompteFinancier" id="choixCompteFinancier" class="select_lettrage" required>
                <option value="">Choix compte financier</option>
                <option value="banque">Compte financier (banque)</option>
                <option value="caisse">Compte financier (caisse)</option>
            </select>
        </div>
        <div class="div_lettrage">
                <button class="bouton" id="submit_Lettrage" type="submit" value="Valider">Valider</button>
        </div>
    </form>
</div>
<a  href="index.php?action=tableauBord">
    <div class="bouton btn_lettrage">Retour</div>
</a>