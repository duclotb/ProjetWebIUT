<link rel="stylesheet" href="../view/assets/css/livre.css">

<?php
	require_once('header.view.php');
?>

<div class="left">
	<div class = "topleft">
		<h1> <?=$titre?> </h1><br>
		<h3> <?=$auteurprenom?> <?=$auteurnom?></h3>
		<h4> <?=$auteurfacultatifnom?> <?=$auteurfacultatifprenom?></h4>

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
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<p> <?=$synopsis?>  </p><br>
	</div>

	<div class="bottomcenter">
		<br>
		<h4>Editeur :</h4><?=$editeur?><br><br>
		<h4>Année édition :</h4><?=$anneeedition?><br><br>
		<h4>Nombre de pages :</h4><?=$pages?> </h4><br><br>
		<h4>Format : </h4><?=$format?><br><br>
		<h4>Section : </h4><?=$section?> </h4><br><br>
		<h4>Genre : </h4><?=$genre?><br><br>
	</div>

</div>

<div class="right">
	<div class="containerboutons">
		<button type="button" class="boutonachat btn">Ajouter au panier</button> 
		<button type="button" class="boutonlisteenvie btn">Ajouter à la liste d'envie</button> 	
	</div>	
</div>


<!-- Note : ajouter bouton "retour" -->

<?php
	require_once('footer.view.php');
?>
