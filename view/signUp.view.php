<link rel="stylesheet" href="../view/assets/css/connection-inscription.css">

<?php require_once('header.view.php'); ?>

<div class="container center">

	<form action="addAccount.ctrl.php" method="post">
		<fieldset>

			<h2>S'incscire</h2>


			<div>
				<label for="prenom">Prénom :</label><br>
				<input type="text" name="prenom" id="prenom" required>
			</div>

			<div>
				<label for="nom">Nom :</label><br>
				<input type="text" name="nom" id="nom" required>
			</div>

			<div>
				<label for="mail">Mail :</label><br>
				<input type="email" name="mail" id="mail" required>
			</div>

			<div>
				<label for="mdp">Mot de passe :</label><br>
				<input type="password" name="mdp" id="mdp" required>
			</div>

			<div>
				<label for="date_naissance">Date de naissance :</label><br>
				<input type="date" name="dateNaissance" id="date_naissance" required>
			</div>

			<p><strong><?=$message?></strong></p>
			
			<input type="submit" class="btn" value="S'inscrire">

		</fieldset>
		

	</form>
</div>

<?php require_once('footer.view.php'); ?>
