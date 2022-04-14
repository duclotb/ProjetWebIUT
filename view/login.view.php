<link rel="stylesheet" href="../view/assets/css/connection-inscription.css">

<?php
	require_once('header.view.php');
?>



<div class="container center">

  <form action="testLogin.ctrl.php" method="post">
    <fieldset>

      <div class="title">

        <h2>Se connecter</h2>

      </div>

      <div>

        <label for="mail">Mail:</label><br>
        <input type="email" name="mail" id="mail">

      </div>

      <div>

        <label for="mdp">Mot de passe:</label><br>
        <input type="password" name="mdp" id="mdp">

      </div>


      <input type="submit" value="Se connecter" class="btn">
      <br>
      <?=$messagerefusconnexion?>

    </fieldset>


  </form>

</div>

<?php
	require_once('footer.view.php');
?>
