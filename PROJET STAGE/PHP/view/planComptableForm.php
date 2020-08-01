<?php
$mode = $_GET["m"]; // on recupere le mode et si différents d'ajout on récupere aussi l'id 
if ($mode != "ajout") {
    $id = $_GET["id"];
    $comptes = PCGAManager::getById($id); // si différent d'ajout on recupere les infos du compte (avec l'id) pour l'affichage des infos dans les inputs
}
$classeComptable = ClasseComptableManager::getList();
echo '<div class="formulaire">
        <form action="index.php?action=planComptableAction&m=' . $mode . '" method="POST">
            <div>
                <label class="form" for="numcompte">Numéro du compte : </label><br>
                <input class="inputFormPCGA" type="text" id="numcompte" name="numcompte" placeholder="Numero du compte" required autofocus ';
if ($mode != "ajout") {
    echo 'value ="' . $comptes->getNumCompte() . '"';
}
echo '          >
        </div>';
if ($mode != "ajout") {
    echo '  <input type="number" id="idPCGA" name="idPCGA" hidden value = "' . $comptes->getIdPCGA() . '"> ';
}
echo '      <div>  
                <label class="form" for="libelleCompte">Libellé du Compte : </label><br>
                <input class="inputFormPCGA" type="text" id="libelleCompte" name="libelleCompte" placeholder="Libellé du compte" required ';
if ($mode != "ajout") {
    echo 'value ="' . $comptes->getLibelleCompte() . '"';
}
echo '          >
        </div> ';
echo '      <div> '; 
echo'   <label class="form" for="idClasseComptable">Classe comptable : </label><br>
        <select name="idClasseComptable" id="idClasseComptable"> ';  
        foreach ($classeComptable as $elt) {
echo'   "<option value="'.$elt->getIdClasseComptable().'">'.$elt->getLibelleClasseComptable().'</option>';
        }  
echo    '</select>';  
if ($mode != "ajout") { // si différent d'ajout je recupère l'idclasseComptable pour pouvoir selectionner la bonne option
    echo '  <input type="number" id="idClasseComptableSelected" name="idClasseComptableSelected" hidden value = "' . $comptes->getIdClasseComptable() . '"> ';
}
echo '          </div> ';
echo '          <div class="centrer">
                <button class="bouton btnPlanComptable" id="submit" type="submit">';
switch ($mode) {
    case "ajout":
        echo 'Ajouter'; // on change le bouton en fonction du mode
        break;
    case "modif":
        echo 'Modifier';
        break;
    case "suppr":
        echo 'Supprimer';
        break;
}
echo '          </button>
                </div>
            </form>
        </div>';
echo ' <a href="index.php?action=planComptableListe">
        <div class="bouton" id="btnRetourPlanComp">Retour</div>
    </a>';
