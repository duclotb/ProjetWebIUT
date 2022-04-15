<?php

	require_once('../config.php');
	require_once('../model/globalDAO.php');
	require_once('../model/LivreDAO.class.php');
	require_once('../model/PanierDAO.class.php');

	require_once(__DIR__.'/../framework/view.fw.php');

	$dao = new PanierDAO();

	$isbn = $_GET["isbn"] ?? "";

	$mail = $_SESSION["mail"] ?? "";

	$message = $dao -> insertLivre($isbn, $mail);

	

	header('Location: homepage.ctrl.php');

?>
