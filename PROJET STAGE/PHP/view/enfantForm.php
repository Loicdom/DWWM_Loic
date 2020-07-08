<?php
$mode = $_GET["m"];
if ($mode != "ajout") {  // On recupère le mode et si il est différent d'ajout on récuperer l'id 
    $id = $_GET["id"];
    $enfant = PersonnesManager::getById($id); // on récupere les infos par rapport a l'id
}
$villes = VillesManager::getList();
echo '<div class="formulaireEnfant">
        <form action="index.php?action=enfantAction&m=' . $mode . '" method="POST">
            <div class="div-formEnfant">
                <label class="formEnfant" for="nomPersonne">Nom : </label>
                <input class="inputformEnfant" type="text" id="nomPersonne" name="nomPersonne" placeholder="Nom enfant" '; ?> pattern="^[A-ZÀ-Ý' ’-]{2,}$" <?php ' required autofocus ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getNomPersonne() . '"';
}
echo '          >
                <div class="div-question"><i class="far fa-question-circle" title="NOM : MAJUSCULE"></i></div>
        </div>';
if ($mode != "ajout") {
    echo '  <input type="number" id="idPersonne" name="idPersonne" hidden value = "' . $enfant->getIdPersonne() . '"> ';
}
    echo '  <input type="text" id="typePersonne" name="typePersonne" hidden value = "Enfant"> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="prenomPersonne">Prénom : </label>
                <input class="inputformEnfant" type="text" id="prenomPersonne" name="prenomPersonne" placeholder="Prénom enfant" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getPrenomPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Prénom : première lettre en MAJUSCULE, le reste en minuscule"></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="dateNaissPersonne">Date de naissance : </label>
                <input class="inputformEnfant" type="date" id="dateNaissPersonne" name="dateNaissPersonne" placeholder="Date de naissance enfant" required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getDateNaissPersonne() . '"';
}
echo '          >
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="lieuNaissPersonne">Lieu de naissance : </label>
                <input class="inputformEnfant" type="text" id="lieuNaissPersonne" name="lieuNaissPersonne" placeholder="Lieu de naissance enfant" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getLieuNaissPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Lieu Naissance : première lettre en MAJUSCULE, le reste en minuscule"></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="adressePersonne">Adresse : </label>
                <input class="inputformEnfant" type="text" id="adressePersonne" name="adressePersonne" placeholder="Adresse enfant" required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getAdressePersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Adresse : Nom de la rue"></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="cpPersonne">Code postal : </label>
                <input class="inputformEnfant" type="text" id="cpPersonne" name="cpPersonne" placeholder="CP enfant" '; ?> pattern="^\d{5}$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getCpPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Code Postal : 5 chiffres"></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="idVille">Ville : </label>
                <select name="idVille" id="idVille"> ';  
        foreach ($villes as $elt) {
echo'   "<option value="'.$elt->getIdVille().'">'.$elt->getLibelleVille().'</option>';
        }  
echo    '</select>';  
if ($mode != "ajout") { // si différent d'ajout je recupère l'idVille pour pouvoir selectionner la bonne option
    echo '  <input type="number" id="villeSelected" name="villeSelected" hidden value = "' . $enfant->getIdVille() . '"> ';
}
echo '       </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="emailPersonne">Email : </label>
                <input class="inputformEnfant" type="text" id="emailPersonne" name="emailPersonne" placeholder="Email parent" '; ?> pattern="^[a-zA-Z0-9-._]{2,}@[a-zA-Z0-9-]{2,}\.[a-z]{2,}(.[a-z]{2,})?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getEmailPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Email : exemple: monEmail@gmail.com"></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="telPersonne">Téléphone : </label>
                <input class="inputformEnfant" type="text" id="telPersonne" name="telPersonne" placeholder="Téléphone parent" '; ?> pattern="^0[1-9]([-. ]?[\d]{2}){4}$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getTelPersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Téléphone : exemple: 06-12-13-14-15"></i></div>
        </div> '; 
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="autorisationPhotos">Autorisation photos : </label>
                <input class="inputformEnfant" type="text" id="autorisationPhotos" name="autorisationPhotos" placeholder="oui / non" required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getAutorisationPhotos() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Photos : Répondre par oui ou non"></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="paiementInscription">Moyen paiement inscription : </label>
                <input class="inputformEnfant" type="text" id="paiementInscription" name="paiementInscription" placeholder="Chèque / espèces" required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getPaiementInscription() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Paiement inscription : Répondre par Chèque, Espece ..."></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="nomRepresentantLegal">Nom représentant légal : </label>
                <input class="inputformEnfant" type="text" id="nomRepresentantLegal" name="nomRepresentantLegal" placeholder="Nom représentant légal" '; ?> pattern="^[A-ZÀ-Ý' ’-]{2,}$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getNomRepresentantLegal() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="NOM REPRESENTANT LEGAL : MAJUSCULE"></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="prenomRepresentantLegal">Prénom représentant légal : </label>
                <input class="inputformEnfant" type="text" id="prenomRepresentantLegal" name="prenomRepresentantLegal" placeholder="Prénom représentant légal" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getPrenomRepresentantLegal() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Prénom représentant légal : première lettre en MAJUSCULE, le reste en minuscule"></i></div>
        </div> ';
echo '      <div class="div-formEnfant"> 
                <label class="formEnfant" for="remarquePersonne">Remarque : </label>
                <input class="inputformEnfant" type="text" id="remarquePersonne" name="remarquePersonne" placeholder="Autres : allergie ? ..." ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getRemarquePersonne() . '"';
}
echo '          >
<div class="div-question"><i class="far fa-question-circle" title="Remarque : facultatif"></i></div>
        </div> ';
        
echo '          <div class="centrer-Enfant">
                <button class="bouton" id="submit" type="submit">';
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
echo ' <a href="index.php?action=enfantListe">
        <div class="bouton btn">Retour</div>
    </a>';
