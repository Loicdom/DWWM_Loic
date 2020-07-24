<?php 
$annees = ExerciceComptableManager::getList();
?>

<div class="content">
    <form class="connect-form" action="" method="post">

        <div class="head-connexion">Connexion</div>
        <div class="container">
            <div class="contenu">
                <i class="far fa-user-circle" aria-hidden="true"></i>
                <input class="input-co" type="text" name="pseudo" id="pseudo" maxlength="50" placeholder="Pseudo" pattern="[a-zA-Z0-9]){3,20}" required autofocus>

            </div>

            <div class="contenu">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                <input class="input-co" type="password" name="motDePasse" id="motDePasse" maxlength="30" placeholder="Mot de passe" required>
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>

            <div class="contenu2">
                <select class="input-co1" name="idExerciceComptable" id="libelleExercice" required>
                <option value="">Année</option>
                <?php
                    foreach ($annees as $elt) {
                        echo "<option value='" . $elt->getIdExerciceComptable() . "'>" . $elt->getLibelleExercice() . "</option>";
                    } ?>
            </select>
            </div>
        </div>



        <input class="bouton" type="submit" value="Valider" />


    </form>
</div>