<?php
// Inclut le mini framework
require_once('../config.php');
require_once(__DIR__.'/../framework/view.fw.php');
require_once('../model/globalDAO.php');
require_once('../model/CompteDAO.class.php');

// Si on essaie de se connecter et que le compte n'existe pas => renvoyer vers une page avec message d'erreur, sinon vers page compte

$mail = $_POST["mail"] ?? "";

$dao = new CompteDAO();

$compte = $dao -> getCompte($mail);

$view = new View();

// Si le compte n'existe pas, afficher
if (!$compte){
    $view ->assign("messagerefusconnexion", "Ce compte n'existe pas");
    $view ->display("login.view.php");
}

else {
    $_SESSION["mail"] = $mail;
    include("homepage.ctrl.php");
}


?>
