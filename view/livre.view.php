<link rel="stylesheet" href="../view/assets/css/livre.css">

<?php require_once('header.view.php');?>

<div class="container space-between">

	<div class="left">

		<div class = "topleft">
			<h1> <?=$titre?> </h1><br>
			<h3> <?=$auteurprenom?> <?=$auteurnom?></h3>
			<h4> <?=$auteurfacultatifnom?> <?=$auteurfacultatifprenom?></h4>
		</div>

		<div class="centerleft">
			<img src="<?=$imageURL?>" alt="">
		</div>

	</div>

	<div class="center">

		<div class="centrecenter">
			<h2> Description du livre </h2><br>
			<p> <?=$synopsis?></p><br>
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

		<div>
			<button type="button" class="btn">Ajouter au panier</button> 
			<button type="button" class="btn">Ajouter à la liste d'envie</button> 	
		</div>	

		<div>
			<p class="prix"> Prix : <?=$prix?> €</p>
		</div>

	</div>


</div>

<?php require_once('footer.view.php');?>
