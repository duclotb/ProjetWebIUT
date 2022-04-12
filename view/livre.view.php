<link rel="stylesheet" href="../view/assets/css/livre.css">

<?php
	require_once('header.view.php');
?>


<div class = "container livre">

	<h1> Titre du livre </h1><br>
	<h3> Auteur : XX </h3><br>
		<div class = "imageachat">
			<img src="../view/assets/images/imageTest.jpg" alt=""><br>
		</div>
	
		<div class="descriptionarticle">
			<p> Description de l'article: </p><br>
		</div>	

	<h2> Prix : 14.50€ <h2><br>

	<button type="button" class="boutonachat">Acheter</button> 
	<button type="button" class="boutonlisteenvie">Ajouter à la liste d'envie</button> 

</div>	





<?php
	require_once('footer.view.php');
?>





/* A ajouter : 
- bouton
- prix
- Auteur
- description du livre
- bulle d'infor
*/
