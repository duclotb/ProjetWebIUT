<link rel="stylesheet" href="../view/assets/css/panier.css">

<?php require_once('header.view.php'); ?>

  <div class="container space-between">
    <div>
      <?php for ($i = 0; $i < $nombre; $i++) :?>

      <div class="rows">
        <a href="livre.ctrl.php?isbn=<?=htmlentities(urlencode("$isbn[$i]"))?>"><img src="<?=$imageURLs[$i]?>" alt=""></a>
        <div class="info">
          <p><strong>Titre</strong> : <?=$titres[$i]?></p>
          <p><strong>Prix</strong> : <?=$prix[$i]?> €</p>
        </div>
      </div>

      <?php endfor ?>
    </div>

    <div id="panier">
      <div>
        <p id="total">
          <strong>Total article</strong> : <?=$nombreArticle?>
          <br>
          <strong>Prix Total</strong> : <?=$prixTotal?> €</p>
        <a href="redirection.ctrl.php" class="btn">Commander</a>
      </div>

    </div>



  </div>





<?php require_once('footer.view.php'); ?>
