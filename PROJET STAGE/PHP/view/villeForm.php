<?php
$mode = $_GET["m"];
?>
<div class="formulaire">
    <form action="index.php?action=villeAction&m=<?php echo $mode?>" method="POST">
        <div>
            <label class="form" for="libelleVille">Ville : </label><br>
            <input class="inputForm" type="text" id="libelleVilleAdd" name="libelleVille" placeholder="Nom de la ville" required autofocus>
        </div>

        <div class="centrer">
            <button class="bouton bouton_ville" id="submit" type="submit">Valider</button>
        </div>
    </form>
</div>
<?php
if($mode == 'benevole') {
?>
<a href="index.php?action=benevoleListe">
    <div class="bouton btn_Ville">Retour</div>
</a>
<?php
} else {
?>
<a href="index.php?action=enfantListe">
    <div class="bouton btn_Ville">Retour</div>
</a>
<?php
}