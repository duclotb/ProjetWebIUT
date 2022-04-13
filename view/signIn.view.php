<link rel="stylesheet" href="../view/assets/css/signIn.css">


<?php
	require_once('header.view.php');
?>

<div class="title">

	<h2>SIGN IN</h2>
	
</div>

<div class="container_sign_in">

<form class="sign_in" action="index.html" method="post">

  <div class="prenom">
    <label for="prenom">Prénom:</label><br>
    <input type="text" name="mail" id="prenom">
  </div>

  <div class="nom">
    <label for="nom">Nom:</label><br>
    <input type="text" name="mail" id="nom">
  </div>

  <div class="mail">
    <label for="mail">Mail:</label><br>
    <input type="text" name="mail" id="mail">
  </div>

  <div class="mdp">
    <label for="mdp">Mot de passe:</label><br>
    <input type="text" name="mail" id="mdp">
  </div>

  <div class="date_naissance">
    <label for="date_naissance">Date de naissance:</label><br>
    <input type="text" name="mail" id="date_naissance">
  </div>

  <div class="sign_in_button">
    <input type="submit" value="sign in">
  </div>

</form>



</div>

<?php
	require_once('footer.view.php');
?>
