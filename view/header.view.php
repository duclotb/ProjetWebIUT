<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../view/assets/css/style.css">
	<link rel="stylesheet" href="../view/assets/css/footer.css">
	<title>ATLAS</title>
</head>
<body>

<header>
	<div class="container space-between">
		
		<h1><a href="homepage.ctrl.php">ATLAS</a></h1>
		<form action="homepage.ctrl.php" class="search-bar" method="get">
			<input type="text" name="keywords" id="" placeholder="Recherche un livre par mot clé">
			<button type="submit"></button>
		</form>
		<div class="connect">
			<?php if (!isset($_SESSION["mail"])): ?>
			<a href="login.ctrl.php" class="btn"><strong>Se connecter</strong></a>
			<a href="signUp.ctrl.php" class="btn"><strong>S'inscrire</strong></a>
			<?php else : ?>
			<a href="panier.ctrl.php"><img src="../view/assets/images/panier-icon.svg"/></a>
			<a href="compte.ctrl.php" class="btn"><strong>Compte</strong></a>
			<?php endif ?>
		</div>
	</div>
</header>

<main>
