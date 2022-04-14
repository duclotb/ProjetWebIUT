<link rel="stylesheet" href="../view/assets/css/homepage.css">

<?php
	require_once('headerConnect.view.php');
	//require_once('header.view.php');
?>
<div class="container wrap space-between">

	<?php for ($i = 0; $i < $nombre; $i++) :?>
		<a href="livre.ctrl.php?isbn=<?=htmlentities(urlencode("$isbn[$i]"))?>">
			<article>
				<div>
					<img src="<?=$imageURLs[$i]?>" alt="">
				</div>
				<div class="information">
					<div class="foo">
						<p title="Titre : <?=$titres[$i]?>"><strong><?=$titres[$i]?></strong></p>
						<p title="Editeur : <?=$editeurs[$i]?>"><i><?=$editeurs[$i]?></i></p>
						<p title="Auteur : <?=$auteurs[$i][0]?> <?=$auteurs[$i][1]?>"><?=$auteurs[$i][0]?> <?=$auteurs[$i][1]?></p>
					</div>
					<div class="prix">
						<p><?=$prix[$i]?> €</p>
					</div>
				</div>
			</article>
		</a>
	<?php endfor ?>

<?php
	require_once('footer.view.php');
?>
