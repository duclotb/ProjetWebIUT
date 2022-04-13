<link rel="stylesheet" href="../view/assets/css/connection-inscription.css">


<?php
	require_once('header.view.php');
?>



<div class="container center">

	<form action="index.html" method="post">
		<fieldset>

			<h2>S'incscire</h2>


			<div>
				<label for="prenom">Prénom :</label><br>
				<input type="text" name="mail" id="prenom">
			</div>

			<div>
				<label for="nom">Nom :</label><br>
				<input type="text" name="mail" id="nom">
			</div>

			<div>
				<label for="mail">Mail :</label><br>
				<input type="email" name="mail" id="mail">
			</div>

			<div>
				<label for="mdp">Mot de passe :</label><br>
				<input type="password" name="mail" id="mdp">
			</div>

			<div>
				<label for="date_naissance">Date de naissance :</label><br>
				<input type="date" name="mail" id="date_naissance">
			</div>

			
			<input type="submit" class="btn" value="S'inscrire">

		</fieldset>
		

	</form>
</div>

<?php
	require_once('footer.view.php');
?>
