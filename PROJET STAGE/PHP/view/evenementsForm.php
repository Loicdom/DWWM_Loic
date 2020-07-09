<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $evenements = EvenementsManager::getById($id);
}
echo '<div class="formulaire">
        <form action="index.php?action=evenementsAction&m=' . $mode . '" method="POST">
            <div>
                <label class="form" for="codeEvenement">Code évènement : </label><br>
                <input class="inputForm" type="text" id="codeEvenement" name="codeEvenement" placeholder="Code évènement" pattern="^[A-Z{1}0-9]{3,}$" required ';
if ($mode != "ajout") { // si c'est différent du mode ajout, on affiche les informations gràce a l'Id
    echo 'value ="' . $evenements->getCodeEvenement() . '"';
}
echo '          >
<i class="far fa-question-circle" title="3 lettres MAJUSCULE ou chiffres minimum"></i>
        </div>';
if ($mode != "ajout") {
    echo '  <input type="number" id="idEvenement" name="idEvenement" hidden value = "' . $evenements->getIdEvenement() . '"> ';
}
echo '      <div>  
                <label class="form" for="libelleEvenement">Libellé évènement : </label><br>
                <input class="inputForm" type="text" id="libelleEvenement" name="libelleEvenement" placeholder="Libellé évènement" required autofocus ';
if ($mode != "ajout") {
    echo 'value ="' . $evenements->getLibelleEvenement() . '"';
}
echo '          >
        </div> ';
echo '          <div class="centrer">
                <button class="bouton" id="submit" type="submit">';
switch ($mode) { // on change le bouton en fonction du mode 
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
echo ' <a href="index.php?action=evenementsListe"> 
        <div class="bouton btn">Retour</div>
    </a>'; // bouton pour un retour au tableau de bord
