<div class="content">
    <form class="connect-form" action="index.php?action=nouveauUser" method="post">

        <div class="head-connexion">Inscription</div>
        <div class="container">
            <div class="contenu">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input class="input-co" type="text" name="pseudo" id="pseudo" maxlength="50" placeholder="Entrez votre Pseudo" pattern="[a-zA-Z0-9]){3,20}" required autofocus>
            </div>

            <div class="regroup">
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
            </div>
        </div>


        <div class="centre">
            <input class="button" type="submit" value="Valider" />
        </div>

    </form>
</div>