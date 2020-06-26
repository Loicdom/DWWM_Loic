<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $comptes = PCGAManager::getById($id);
}
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
echo '      <div>  
        <label class="form" for="idClasseComptable">Id classe comptable : </label><br>
        <input class="inputFormPCGA" type="text" id="idClasseComptable" name="idClasseComptable" placeholder="Id classe comptable" required ';
if ($mode != "ajout") {
    echo 'value ="' . $comptes->getIdClasseComptable() . '"';
}
echo '          >
</div> ';
echo '          <div class="centrer">
                <button class="bouton" id="submit" type="submit">';
switch ($mode) {
    case "ajout":
        echo 'Ajouter';
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
        <div class="bouton btn">Retour</div>
    </a>';
