<link rel="stylesheet" href="../view/assets/css/login.css">

<?php
	require_once('header.view.php');
?>

<div class="title">

<h2>LOGIN</h2>

</div>

<div class="container_login">

<form class="" action="index.html" method="post">

  <div class="mail">

  <label for="mail">Mail:</label><br>
  <input type="text" name="mail" id="mail">

  </div>

  <div class="mdp">

  <label for="mdp">Mot de passe:</label><br>
  <input type="text" name="mdp" id="mdp">

  </div>

<div class="submit_button">

  <input type="submit" value="login">

  </div>

</form>

</div>

<?php
	require_once('footer.view.php');
?>
