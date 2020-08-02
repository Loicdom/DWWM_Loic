<?php
$mode = $_GET["m"];
if ($mode != "ajout") {  // On recupère le mode et si il est différent d'ajout on récuperer l'id 
    $id = $_GET["id"];
    $benevole = PersonnesManager::getById($id); // on récupere les infos par rapport a l'id
}
$villes = VillesManager::getList();
echo '<div class="formulairePersonne">
        <form action="index.php?action=benevoleAction&m=' . $mode . '" method="POST">
            <div class="div-formPersonne">
                <label class="formPersonne" for="nomPersonne">Nom : </label>
                <input class="inputformPersonne" type="text" id="nomPersonne" name="nomPersonne" placeholder="Nom benevole" '; ?> pattern="^[A-ZÀ-Ý' ’-]{2,}$" <?php ' required autofocus ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getNomPersonne() . '"';
}
echo '          >
                <div class="div-question"><i class="far fa-question-circle" title="NOM : MAJUSCULE"></i></div>
        </div>';
if ($mode != "ajout") {
    echo '  <input type="number" id="idPersonne" name="idPersonne" hidden value = "' . $benevole->getIdPersonne() . '"> ';
}
    echo '  <input type="text" id="typePersonne" name="typePersonne" hidden value = "Bénévole"> '; // type personne à "benevole" pour l'ajout
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="prenomPersonne">Prénom : </label>
                <input class="inputformPersonne" type="text" id="prenomPersonne" name="prenomPersonne" placeholder="Prénom benevole" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getPrenomPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Prénom : première lettre en MAJUSCULE, le reste en minuscule"></i></div>
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="dateNaissPersonne">Date de naissance : </label>
                <input class="inputformPersonne" type="date" id="dateNaissPersonne" name="dateNaissPersonne" placeholder="Date de naissance benevole" required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getDateNaissPersonne() . '"';
}
echo '          >
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="lieuNaissPersonne">Lieu de naissance : </label>
                <input class="inputformPersonne" type="text" id="lieuNaissPersonne" name="lieuNaissPersonne" placeholder="Lieu de naissance benevole" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getLieuNaissPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Lieu Naissance : première lettre en MAJUSCULE, le reste en minuscule"></i></div>
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="adressePersonne">Adresse : </label>
                <input class="inputformPersonne" type="text" id="adressePersonne" name="adressePersonne" placeholder="Adresse benevole" required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getAdressePersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Adresse : Nom de la rue"></i></div>
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="cpPersonne">Code postal : </label>
                <input class="inputformPersonne" type="text" id="cpPersonne" name="cpPersonne" placeholder="CP benevole" '; ?> pattern="^\d{5}$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getCpPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Code Postal : 5 chiffres"></i></div>
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="idVille">Ville : </label>
                <select name="idVille" id="idVille"> ';  
        foreach ($villes as $elt) {
echo'   "<option value="'.$elt->getIdVille().'">'.$elt->getLibelleVille().'</option>';
        }  
echo    '</select>';  
if ($mode != "ajout") { // si différent d'ajout je recupère l'idVille pour pouvoir selectionner la bonne option
    echo '  <input type="number" id="villeSelected" name="villeSelected" hidden value = "' . $benevole->getIdVille() . '"> ';
}
echo '       </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="emailPersonne">Email : </label>
                <input class="inputformPersonne" type="text" id="emailPersonne" name="emailPersonne" placeholder="Email" '; ?> pattern="^[a-zA-Z0-9-._]{2,}@[a-zA-Z0-9-]{2,}\.[a-z]{2,}(.[a-z]{2,})?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getEmailPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Email : exemple: monEmail@gmail.com"></i></div>
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="telPersonne">Téléphone : </label>
                <input class="inputformPersonne" type="text" id="telPersonne" name="telPersonne" placeholder="Téléphone" '; ?> pattern="^0[1-9]([-. ]?[\d]{2}){4}$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getTelPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Téléphone : exemple: 06-12-13-14-15"></i></div>
        </div> '; 
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="autorisationPhotos">Autorisation photos : </label>
                <input class="inputformPersonne" type="text" id="autorisationPhotos" name="autorisationPhotos" placeholder="oui / non" required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getAutorisationPhotos() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Photos : Répondre par oui ou non"></i></div>
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="bafaAquisBenevole">Bafa : </label>
                <input class="inputformPersonne" type="text" id="bafaAquisBenevole" name="bafaAquisBenevole" placeholder="Oui / Non" required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getBafaAquisBenevole() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Bafa : Répondre par Oui ou Non"></i></div>
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="casierJudiciaire">Casier judiciaire fourni : </label>
                <input class="inputformPersonne" type="text" id="casierJudiciaire" name="casierJudiciaire" placeholder="Oui / Non" required ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getCasierJudiciaire() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Casier judicaire fourni : Oui ou Non"></i></div>
        </div> ';
echo '      <div class="div-formPersonne"> 
                <label class="formPersonne" for="remarquePersonne">Remarque : </label>
                <input class="inputformPersonne" type="text" id="remarquePersonne" name="remarquePersonne" placeholder="Autres : allergie ? ..." ';
if ($mode != "ajout") {
    echo 'value ="' . $benevole->getRemarquePersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Remarque : facultatif"></i></div>
        </div> ';
        
echo '          <div class="centrer-Personne">
                <button class="bouton btn_longform" id="submit" type="submit">';
switch ($mode) {
    case "ajout":
        echo 'Ajouter'; // On change le bouton en fonction du mode
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
echo ' <a href="index.php?action=benevoleListe">
        <div class="bouton btn">Retour</div>
    </a>';
