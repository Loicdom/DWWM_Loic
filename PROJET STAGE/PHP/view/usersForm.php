<?php
$mode = $_GET["m"];
if ($mode != "ajout") { // récupere le mode et si différent de ajout on recupere l'id pour récuperer toutes les infos d'un utilisateur
    $id = $_GET["id"];
    $utilisateurs = UsersManager::getById($id);
}
echo '<div class="formulaire">
        <form action="index.php?action=formEnregistrement&m=' . $mode . '" method="POST">
        <div class="contenu">
        <i class="far fa-user-circle" aria-hidden="true"></i>
        <input class="input-co" type="text" name="pseudo" id="pseudo" maxlength="50" placeholder="Entrez votre Pseudo" pattern="[a-zA-Z0-9]){3,20}" required autofocus ';
if ($mode == "suppr") {
    echo 'value ="' . $utilisateurs->getPseudo() . '"';
}
echo '          >
    </div> ';
if ($mode == "suppr") {
    echo '  <input type="number" id="idUser" name="idUser" hidden value = "' . $utilisateurs->getIdUser() . '"> ';
}
if ($mode != "suppr") {
    echo ' <div class="regroup">
                <div class="contenu">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <input class="input-co" type="password" name="motDePasse" id="motDePasse" maxlength="30" placeholder="Entrez votre mot de passe" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{5,15})" required>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <div class="espH"></div>
                    <div id="message">

                        <p id="lettre" class="invalid"><b>une miniscule</b></p>
                        <p id="capital" class="invalid"><b>une Majuscule</b></p>
                        <p id="chiffre" class="invalid"><b>un chiffre</b></p>
                        <p id="longueur" class="invalid"><b>5 caractères minimum</b></p>
                        <p id="special" class="invalid"><b>caract. spécial (-+!*$@%_)</b></p>
                    </div>
                </div>
                </div>
                <div class="contenu">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input class="input-co" type="password" name="confirm-mdp" id="confirm-mdp" maxlength="30" placeholder="Confirmer le Mot de Passe" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{5,15})" required>
            </div>';
}
echo '      <div class="role">  
                <label class="form" for="role">Role : </label><br>
                <input class="inputFormRole" type="text" id="role" name="role" placeholder="Role (1:Admin,2:Users)" required ';
if ($mode == "suppr") {
    echo 'value ="' . $utilisateurs->getRole() . '"';
}
echo '          >
        </div> ';
echo '          <div class="centrer">
                <button class="bouton" id="submit" type="submit">';
switch ($mode) {
    case "ajout":
        echo 'Ajouter';
        break;
    case "suppr":
        echo 'Supprimer';
        break;
}
echo '          </button>
                </div>
            </form>
        </div>';
echo ' <a href="index.php?action=usersListe">
        <div class="bouton btn">Retour</div>
    </a>';
