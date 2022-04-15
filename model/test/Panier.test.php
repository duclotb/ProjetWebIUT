<?php

	require_once("../Panier.class.php");
	require_once("../Livre.class.php");

	$panier = new Panier();
	$livre = new Livre("t", "t", "t", "t", "t", "t", "t", "t", 200, "t", "t", "t", 1.5, "t", "t");
	$livre2 = new Livre("t", "t", "t", "t", "t", "t", "t", "t", 200, "t", "t", "t", 1.5, "t", "t");

	$panier -> addLivre($livre);
	$panier -> addLivre($livre2);

	print_r($panier -> getPrixGlobal());

?>