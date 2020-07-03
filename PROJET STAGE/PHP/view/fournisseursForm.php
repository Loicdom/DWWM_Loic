<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $fournisseurs = FournisseursManager::getById($id);
}
echo '<div class="formulaire">
        <form action="index.php?action=fournisseursAction&m=' . $mode . '" method="POST">
            <div>
                <label class="form" for="codeFournisseur">Code du fournisseur : </label><br>
                <input class="inputForm" type="text" id="codeFournisseur" name="codeFournisseur" placeholder="Code en MAJUSCULE" pattern="^[A-Z{1}0-9]{3,}$" required ';
if ($mode != "ajout") { // si c'est différent du mode ajout, on affiche les informations gràce a l'Id
    echo 'value ="' . $fournisseurs->getCodeFournisseur() . '"';
}
echo '          >
<i class="far fa-question-circle" title="3 lettres MAJUSCULE ou chiffres minimum"></i>
        </div>';
if ($mode != "ajout") {
    echo '  <input type="number" id="idFournisseur" name="idFournisseur" hidden value = "' . $fournisseurs->getIdFournisseur() . '"> ';
}
echo '      <div>  
                <label class="form" for="libelleFournisseur">Libellé du fournisseur : </label><br>
                <input class="inputForm" type="text" id="libelleFournisseur" name="libelleFournisseur" placeholder="Libellé du fournisseur" required autofocus ';
if ($mode != "ajout") {
    echo 'value ="' . $fournisseurs->getLibelleFournisseur() . '"';
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
echo ' <a href="index.php?action=fournisseursListe"> 
        <div class="bouton btn">Retour</div>
    </a>'; // bouton pour un retour au tableau de bord
