<?php
$type = "depart";
$ecritures = EcrituresManager::getList($annee, $type);


if (empty($ecritures)) { //Si rien dans ecritures on affiche se qu'il y a en dessous
    
    echo '  <form action="index.php?action=montantDepartAction&j=' . $type . '" method="POST">
            <div class="div_montantDepart">
                <label class="form_montantDepart" for="banque">Montant en banque au 01/01 : </label><br>
                <input class="inputform_montantDepart" type="number" step="0.01" name="banque" placeholder="Montant en banque au 01/01" required>
            </div>
            <div class="div_montantDepart">
                <label class="form_montantDepart " for="caisse">Montant en caisse au 01/01 : </label><br>
                <input class="inputform_montantDepart" type="number" step="0.01" name="caisse" placeholder="Montant en caisse au 01/01" required>
            </div>
                <div class="centrer_ecriture">
                <button class="bouton btnDep" id="submit" type="submit" value="Valider">Valider</button>
            </div>
            </form>'; // On affiche les input pour avoir les montant de départ en caisse et en banque
} else {
    header("location:index.php?action=tableauBord"); // si les montant sont déja ok, on envoi vers le tableau de bord
}
