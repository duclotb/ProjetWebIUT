<link rel="stylesheet" href="../view/assets/css/livre.css">

<?php
	require_once('header.view.php');
?>

<div class="left">
	<div class = "topleft">
		<h1> <?=$titre?> </h1><br>
		<h3> Auteur : <?=$auteurprenom?> <?=$auteurnom?></h3>

	</div>

	<div class="centerleft">
		<img src="../view/assets/images/imageTest.jpg" alt="">
	</div>

	<div class="bottomleft">
		<p class="prix"> Prix : <?=$prix?> €</p>
	</div>
</div>

<div class="center">
	<div class="centrecenter">
		<h2> Description du livre </h2><br>
		<p> <?=$synopsis?> </p><br>

	</div>
</div>

<div class="right">
	<div class="containerboutons">
<<<<<<< HEAD
		<button type="button" class="boutonachat">Ajouter au panier</button> 
		<button type="button" class="boutonlisteenvie">Ajouter à la liste d'envie</button> 	
	</div>	
=======
		<a href="panier.ctrl.php" class="boutonachat">Acheter</a>
		<button type="button" class="boutonlisteenvie">Ajouter à la liste d'envie</button>
	</div>
>>>>>>> da273af5b413880a712a1c85f6826fbc4a30c8a0
</div>


// Note : ajouter bouton "retour"

<?php
	require_once('footer.view.php');
?>
