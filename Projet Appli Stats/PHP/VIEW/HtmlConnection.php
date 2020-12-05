<!-- Affichage du formulaire qui permet la saisie -->
<form method="post" action="index.php?action=connect" class="body_co">

	<fieldset>
		<legend>Connexion :</legend>

		<div class="contenu_co">
			<label for="identifiant">Identifiant :</label>
			<div class="ligne_co">
				<input type="text" name="identifiant" id="identifiant" maxlength="50" pattern="" placeholder="Identifiant de connexion" required autofocus>
			</div>
		</div>

		<div class="contenu_co">
			<label for="motDePasse">Mot de passe :</label>
			<div class="ligne_co">
				<input type="motDePasse" id="motDePasse" name="motDePasse" pattern="" placeholder="***********" required>
			</div>
		</div>
	</fieldset>
	<div class="centrer_co">
		<input class="bouton_co" type="submit" value="Connexion" />
	</div>
</form>
<a href="index.php?action=nouveauUser" class="inscription">Pas encore inscrit ?</a>