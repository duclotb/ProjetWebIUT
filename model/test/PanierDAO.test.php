<?php

	require_once("../PanierDAO.class.php");
	require_once('../globalDAO.php');

	$dao = new PanierDAO();

	$panier = $dao -> getPanier("test@test");

	print_r($panier);

?>