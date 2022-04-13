<link rel="stylesheet" href="../view/assets/css/commande.css">

<?php
	require_once('header.view.php');

?>

 <div id="facture">
          <table>
              <caption>
                      Commande
              </caption>

              <tr>
                <th>Titre</th>
                <th>Prix</th>
              </tr>

                  <?php for ($i = 0; $i < $nombre; $i++) :?>
                    <tr>
                      <td><div class="titre"><?=$titre?></div></td>
                      <td><div id="prix"><?=$prix?></td>
                    </tr>
                    <?php endfor ?>
                      <tr><th colspan="5"><div id="corner-bottom">Total price :  <?=$prixGlobal?></div></th></tr>;
          </table>
      </div>

<?php
  require_once('footer.view.php');
  ?>
