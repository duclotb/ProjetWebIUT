<link rel="stylesheet" href="../view/assets/css/livre.css">

<?php
	require_once('header.view.php');
?>

<div class="pageachat">

<div class="left">
	<div class = "topleft">
		<h1> Titre du livre </h1><br>
		<h3> Auteur : </h3>

	</div>

	<div class="centerleft">
		<img src="../view/assets/images/imageTest.jpg" alt="">
	</div>

	<div class="bottomleft">
		<p class="prix"> Prix : 14.50€</p>
	</div>
</div>

<div class="center">
	<div class="centrecenter">
		<h2> Description du livre </h2><br>
		<p> is similes sunt omnes, qui virtuti student levantur vitiis, levantur erroribus, nisi forte censes Ti. Quod quidem nobis non saepe contingit. Quae duo sunt, unum facit. Quo modo autem philosophus loquitur? Facillimum id quidem est, inquam. Nihil enim arbitror esse magna laude dignum, quod te praetermissurum credam aut mortis aut doloris metu. Maximas vero virtutes iacere omnis necesse est </p><br>

	</div>
</div>

<div class="right">
	<div class="containerboutons">
		<a href="commande.ctrl.php" class="boutonachat">Acheter</a>
		<button type="button" class="boutonlisteenvie">Ajouter à la liste d'envie</button>
	</div>
</div>

</div>


<?php
	require_once('footer.view.php');
?>
