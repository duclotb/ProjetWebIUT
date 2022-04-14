<link rel="stylesheet" href="../view/assets/css/livre.css">

<?php require_once('header.view.php');?>

<div class="container space-between">

	<div id="information-image">

		<div>
			<h1> <?=$titre?> </h1><br>
			<h3> <?=$auteurprenom?> <?=$auteurnom?></h3>
			<h4> <?=$auteurfacultatifnom?> <?=$auteurfacultatifprenom?></h4>
		</div>

		<div>
			<img src="<?=$imageURL?>" alt="">
		</div>

	</div>

	<div id="information-text">

		<div>
			<h2> Description du livre </h2><br>
			<p> <?=$synopsis?></p><br>
		</div>

		<div>
			<br>
			<p>Editeur : <span><?=$editeur?></span></p>
			<br>
			<p>Année édition : <span><?=$anneeedition?></span></p>
			<br>
			<p>Nombre de pages : <span><?=$pages?></span></p>
			<br>
			<p>Format : <span><?=$format?></span></p>
			<br>
			<p>Section : <span><?=$section?></span></p>
			<br>
			<p>Genre : <span><?=$genre?></span></p>
		</div>

	</div>

	<div class="right">

		<div>
			<a href="panier.ctrl.php"> <button type="button" class="btn"> Ajouter au panier</button></a>
			<a href="panier.ctrl.php"><button type="button" class="btn">  Ajouter à la liste d'envie</button></a>
		</div>

		<div>
			<p class="prix"> Prix : <?=$prix?> €</p>
		</div>

	</div>


</div>

<?php require_once('footer.view.php');?>
