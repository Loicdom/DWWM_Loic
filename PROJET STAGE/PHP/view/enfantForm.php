<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $enfant = PersonnesManager::getById($id);
}
echo '<div class="formulaire">
        <form action="index.php?action=enfantAction&m=' . $mode . '" method="POST">
            <div>
                <label class="form" for="nomPersonne">Nom : </label><br>
                <input class="inputForm" type="text" id="nomPersonne" name="nomPersonne" placeholder="Nom enfant" '; ?> pattern="^[A-ZÀ-Ý' ’-]{2,}$" <?php ' required autofocus ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getNomPersonne() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
                <i class="far fa-question-circle" title="NOM : MAJUSCULE"></i>
        </div>';
if ($mode != "ajout") {
    echo '  <input type="number" id="idPersonne" name="idPersonne" hidden value = "' . $enfant->getIdPersonne() . '"> ';
}
    echo '  <input type="text" id="typePersonne" name="typePersonne" hidden value = "Enfant"> ';
echo '      <div>  
                <label class="form" for="prenomPersonne">Prénom : </label><br>
                <input class="inputForm" type="text" id="prenomPersonne" name="prenomPersonne" placeholder="Prénom enfant" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getPrenomPersonne() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
<i class="far fa-question-circle" title="Prénom : première lettre en MAJUSCULE, le reste en minuscule"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="dateNaissPersonne">Date de naissance : </label><br>
                <input class="inputForm" type="date" id="dateNaissPersonne" name="dateNaissPersonne" placeholder="Date de naissance enfant" required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getDateNaissPersonne() . '"';
}
echo '          >
        </div> ';
echo '      <div>  
                <label class="form" for="lieuNaissPersonne">Lieu de naissance : </label><br>
                <input class="inputForm" type="text" id="lieuNaissPersonne" name="lieuNaissPersonne" placeholder="Lieu de naissance enfant" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getLieuNaissPersonne() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
<i class="far fa-question-circle" title="Lieu Naissance : première lettre en MAJUSCULE, le reste en minuscule"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="adressePersonne">Adresse : </label><br>
                <input class="inputForm" type="text" id="adressePersonne" name="adressePersonne" placeholder="Adresse enfant" required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getAdressePersonne() . '"';
}
echo '          >
<i class="far fa-question-circle" title="Adresse : Nom de la rue"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="cpPersonne">Code postal : </label><br>
                <input class="inputForm" type="text" id="cpPersonne" name="cpPersonne" placeholder="CP enfant" '; ?> pattern="^\d{5}$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getCpPersonne() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
<i class="far fa-question-circle" title="Code Postal : 5 chiffres"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="villePersonne">Ville : </label><br>
                <input class="inputForm" type="text" id="villePersonne" name="villePersonne" placeholder="Ville enfant" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getVillePersonne() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
<i class="far fa-question-circle" title="Ville : première lettre en MAJUSCULE, le reste en minuscule"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="emailPersonne">Email : </label><br>
                <input class="inputForm" type="text" id="emailPersonne" name="emailPersonne" placeholder="Email parent" '; ?> pattern="^[a-zA-Z0-9-._]{2,}@[a-zA-Z0-9-]{2,}\.[a-z]{2,}(.[a-z]{2,})?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getEmailPersonne() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
<i class="far fa-question-circle" title="Email : exemple: monEmail@gmail.com"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="telPersonne">Téléphone : </label><br>
                <input class="inputForm" type="text" id="telPersonne" name="telPersonne" placeholder="Téléphone parent" '; ?> pattern="^0[1-9]([-. ]?[\d]{2}){4}$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getTelPersonne() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
<i class="far fa-question-circle" title="Téléphone : exemple: 06-12-13-14-15"></i>
        </div> '; 
echo '      <div>  
                <label class="form" for="autorisationPhotos">Autorisation photos : </label><br>
                <input class="inputForm" type="text" id="autorisationPhotos" name="autorisationPhotos" placeholder="oui / non" required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getAutorisationPhotos() . '"';
}
echo '          >
<i class="far fa-question-circle" title="Photos : Répondre par oui ou non"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="paiementInscription">Moyen paiement inscription : </label><br>
                <input class="inputForm" type="text" id="paiementInscription" name="paiementInscription" placeholder="Chèque / espèces" required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getPaiementInscription() . '"';
}
echo '          >
<i class="far fa-question-circle" title="Paiement inscription : Répondre par Chèque, Espece ..."></i>
        </div> ';
echo '      <div>  
                <label class="form" for="nomRepresentantLegal">Nom représentant légal : </label><br>
                <input class="inputForm" type="text" id="nomRepresentantLegal" name="nomRepresentantLegal" placeholder="Nom représentant légal" '; ?> pattern="^[A-ZÀ-Ý' ’-]{2,}$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getNomRepresentantLegal() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
<i class="far fa-question-circle" title="NOM REPRESENTANT LEGAL : MAJUSCULE"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="prenomRepresentantLegal">Prénom représentant légal : </label><br>
                <input class="inputForm" type="text" id="prenomRepresentantLegal" name="prenomRepresentantLegal" placeholder="Prénom représentant légal" '; ?> pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" <?php ' required ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getPrenomRepresentantLegal() . '"';
    echo '<div class="boutonVert"><img src="Images/V.png" alt="valide"></div>
    <div class="boutonRouge"><img src="Images/X.png" alt="non valide"></div>
    <span class="message"></span>';
}
echo '          >
<i class="far fa-question-circle" title="Prénom représentant légal : première lettre en MAJUSCULE, le reste en minuscule"></i>
        </div> ';
echo '      <div>  
                <label class="form" for="remarquePersonne">Remarque : </label><br>
                <input class="inputForm" type="text" id="remarquePersonne" name="remarquePersonne" placeholder="Autres : allergie ? ..." ';
if ($mode != "ajout") {
    echo 'value ="' . $enfant->getRemarquePersonne() . '"';
}
echo '          >
<i class="far fa-question-circle" title="Remarque : facultatif"></i>
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
echo ' <a href="index.php?action=enfantListe">
        <div class="bouton btn">Retour</div>
    </a>';
