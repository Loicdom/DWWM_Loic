<?php
$dateMini = $_POST['date1'];
$dateMaxi = $_POST['date2'];
$journal = $_POST['choixCompte'];
$choixCompteFinancier = $_POST['choixCompteFinancier'];
$tiers = EcrituresComptableManager::getListLettrage($dateMini, $dateMaxi, $journal);
$financier = EcrituresComptableManager::getListLettrage($dateMini, $dateMaxi, $choixCompteFinancier);
?>
<div class="contenu_Lettrage">

    <form action="index.php?action=lettrageAction&j=<?php echo $journal ?>&f=<?php echo $choixCompteFinancier ?>" method="POST">
        <div class="formulaire_lettrage">
            <h2 class="h2_lettrage">En <?php echo $journal ?> :</h2>
            <div class="ligne">
                <div class="divTitreLettrage">Date</div>
                <div class="divTitreLettrage">Numéro du compte</div>
                <div class="divTitreLettrage">Libellé du compte</div>
                <div class="divTitreLettrage">Libellé de l'écriture</div>
                <div class="divTitreLettrage">Débit</div>
                <div class="divTitreLettrage">Crédit</div>
                <div class="divTitreLettrage">Lettrage</div>
            </div>
            <?php
            foreach ($tiers as $elt) { // on fait une boucle pour afficher tout les ecritures
            ?>
                <div class="ligne">
            
                        <input class="inputform_ecriture" type="hidden" name="idEcriture[]" value="<?php echo $elt->getIdEcriture() ?>">
                    
                    <div class="bloc">
                        <input class="inputform_ecriture" type="date" name="dateEcriture[]" readOnly="readOnly" value="<?php echo $elt->getDateEcriture() ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="numCompte[]" readOnly="readOnly" value="<?php echo $elt->getNumCompte() ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="libelleCompte[]" readOnly="readOnly" value="<?php echo $elt->getLibelleCompte() ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="libelleEcriture[]" readOnly="readOnly" value="<?php echo $elt->getLibelleEcriture() ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="debit[]" readOnly="readOnly" value="<?php if ($elt->getsens() == 'Débit') {
                                                                                                                    echo $elt->getmontant();
                                                                                                                } ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="credit[]" readOnly="readOnly" value="<?php if ($elt->getsens() == 'Crédit') {
                                                                                                                        echo $elt->getmontant();
                                                                                                                    } ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="lettrage[]" value="<?php if ($elt->getLettrage() != null) {
                                                                                                        echo $elt->getLettrage();
                                                                                                    } ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="formulaire_lettrage">
            <h2 class="h2_lettrage">En <?php echo $choixCompteFinancier ?> :</h2>
            <div class="ligne">
                <div class="divTitreLettrage">Date</div>
                <div class="divTitreLettrage">Numéro du compte</div>
                <div class="divTitreLettrage">Libellé du compte</div>
                <div class="divTitreLettrage">Libellé de l'écriture</div>
                <div class="divTitreLettrage">Débit</div>
                <div class="divTitreLettrage">Crédit</div>
                <div class="divTitreLettrage">Lettrage</div>
            </div>
            <?php
            foreach ($financier as $elt) { // on fait une boucle pour afficher tout les ecritures
            ?>
                <div class="ligne">
                
                        <input class="inputform_ecriture" type="hidden" name="idEcritureFinancier[]" value="<?php echo $elt->getIdEcriture() ?>">
                
                    <div class="bloc">
                        <input class="inputform_ecriture" type="date" name="dateEcritureFinancier[]" readOnly="readOnly" value="<?php echo $elt->getDateEcriture() ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="numCompteFinancier[]" readOnly="readOnly" value="<?php echo $elt->getNumCompte() ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="libelleCompteFinancier[]" readOnly="readOnly" value="<?php echo $elt->getLibelleCompte() ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="libelleEcritureFinancier[]" readOnly="readOnly" value="<?php echo $elt->getLibelleEcriture() ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="debitFinancier[]" readOnly="readOnly" value="<?php if ($elt->getsens() == 'Débit') {
                                                                                                                    echo $elt->getmontant();
                                                                                                                } ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="creditFinancier[]" readOnly="readOnly" value="<?php if ($elt->getsens() == 'Crédit') {
                                                                                                                        echo $elt->getmontant();
                                                                                                                    } ?>">
                    </div>
                    <div class="bloc">
                        <input class="inputform_ecriture" type="text" name="lettrageFinancier[]" value="<?php if ($elt->getLettrage() != null) {
                                                                                                        echo $elt->getLettrage();
                                                                                                    } ?>">
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="centrer_ecriture">
            <button class="bouton valideEcriture" id="submit" type="submit" value="Valider">Valider</button>
        </div>
    </form>
</div>
<div id="btn_affichageCompte"></div>
<a href="index.php?action=lettrage">
    <div class="bouton btn">Retour</div>
</a>