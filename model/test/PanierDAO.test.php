<?php

	require_once("../PanierDAO.class.php");
	require_once('../globalDAO.php');

	$dao = new PanierDAO();

	$panier = $dao -> getPanier("test@test");
	
	$bool = $dao -> isLivreAlreadyInPanier("2-09-211355-0","test@test");
	// print_r($panier);
	var_dump($bool);
	$dao -> insertLivre("2-09-211355-0","test@test");

?>