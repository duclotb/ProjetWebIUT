<link rel="stylesheet" href="../view/assets/css/homepage.css">

<?php
	require_once('header.view.php');
?>
<div class="container wrap center">
	<a href="livre.ctrl.php?id=XXX">
		<article>
			<div>
				<img src="../view/assets/images/imageTest.jpg" alt="">
			</div>
			<div class="information">
				<div class="foo">
					<p><strong>Titre du livre</strong></p>
					<p><i>Editeur</i></p>
					<p>Auteur</p>
				</div>
				<div class="prix">
					<p>14.50 €</p>
				</div>
			</div>
		</article>
	</a>

<?php
	require_once('footer.view.php');
?>
