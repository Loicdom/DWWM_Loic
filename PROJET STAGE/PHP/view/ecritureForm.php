<?php
$evenements = EvenementsManager::getList();
$fournisseurs = FournisseursManager::getList();
$comptes = PCGAManager::getList();
?>
<div class="ligne">
    <div class="divTitre">Date</div>
    <div class="divTitre">Code</div>
    <div class="divTitre">Numéro du compte</div>
    <div class="divTitre">Libellé du compte</div>
    <div class="divTitre">Libellé de l'écriture</div>
    <div class="divTitre">Débit</div>
    <div class="divTitre">Crédit</div>
    <div class="divTitre">Plus</div>
</div>

<div class="formulaire_ecriture">
    <form action="index.php?action=ecritureAction&m=' . $mode . '" method="POST">
        <div class="contenuEcriture" id="contenuEcriture">
            <div class="div_ecriture">
                <input class="inputForm_ecritureDate" type="date" name="dateEcriture" required autofocus> </div>
            <div class="div_ecriture">
                <select name="codeEvenement[]" id="codeEvt" class="select_ecriture_event">
                    <option value="">Code de l'évènement</option>
                    <?php
                    foreach ($evenements as $elt) {
                        echo "<option value='" . $elt->getCodeEvenement() . "'>" . $elt->getLibelleEvenement() . "</option>";
                    } ?>
                </select>
            </div>
            <div class="div_ecriture">
                <input class="inputform_ecriture" type="text" id="numComteEvt" name="numCompte[]" placeholder="Numéro du compte" required>
            </div>
            <div class="div_ecriture">
                <select name="libelleCompte[]" id="libelleCompteEvt" class="select_ecriture_compteEvent">
                    <option value="">Libellé du compte</option>
                    <?php
                    foreach ($comptes as $elmt) {
                        echo "<option value='" . $elmt->getNumCompte() . "'>" . $elmt->getLibelleCompte() . "</option>";
                    } ?>
                </select>
            </div>
            <div class="div_ecriture">
                <input class="inputform_ecriture" type="text" name="libelleEcriture[]" placeholder="Libellé de l'écriture" required>
            </div>
            <div class="div_ecriture">
                <input class="inputform_ecriture" type="number" step="0.01" name="debit[]" placeholder="Montant au débit" required>
            </div>
            <div class="div_ecriture">
                <input class="inputform_ecriture" type="number" step="0.01" name="cedit[]" placeholder="Montant au crédit" required>
            </div>
            <div class="div_ecriture">
                <button class="btn_ecriture" name="btn_ecriture[]" id="btn_add" data-nbre="0" data-max="8">+</button>
            </div>
        </div>

        <div>
            <div id="add_contenuEcriture">

            </div>
        </div>

        <div class="contenuEcriture">
            <div class="div_ecriture">
                <input class="inputForm_ecritureDate" type="date" name="dateEcriture" placeholder="Date de l'écriture" required>
            </div>
            <div class="div_ecriture">
                <select name="codeFournisseur" id="codeFour" class="select_ecriture">
                    <option value="">Code du fournisseur</option>
                    <?php
                    foreach ($fournisseurs as $elmts) {
                        echo "<option value='" . $elmts->getCodeFournisseur() . "'>" . $elmts->getLibelleFournisseur() . "</option>";
                    } ?>
                </select>
            </div>
            <div class="div_ecriture">
                <input class="inputform_ecriture" type="text" id="numCompteF" name="numCompte" placeholder="Numéro du compte" required>
            </div>
            <div class="div_ecriture">
                <select name="libelleCompte" id="libelleCompteF" class="select_ecriture">
                    <option value="">Libellé du compte</option>
                    <?php
                    foreach ($comptes as $elmt) {
                        echo "<option value='" . $elmt->getNumCompte() . "'>" . $elmt->getLibelleCompte() . "</option>";
                    } ?>
                </select>
            </div>
            <div class="div_ecriture">
                <input class="inputform_ecriture" type="text" name="libelleEcriture" placeholder="Libellé de l'écriture" required>
            </div>
            <div class="div_ecriture">
                <input class="inputform_ecriture" type="number" step="0.01" name="debit" placeholder="Montant au débit" required>
            </div>
            <div class="div_ecriture">
                <input class="inputform_ecriture" type="number" step="0.01" name="cedit" placeholder="Montant au crédit" required>
            </div>
            <div class="div_ecriture">
                <label for="file" class="label_file">Enregistrer facture</label>
                <input class="input_file" type="file" name="facture" required>
            </div>
        </div>
        <div class="centrer_ecriture">
            <button class="bouton valideEcriture" id="submit" type="submit" value="Valider">Valider</button>
        </div>
    </form>
</div>
<div id="btn_affichageCompte"></div>
<a href="index.php?action=ecritureListe">
    <div class="bouton btn">Retour</div>
</a>