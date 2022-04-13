<?php

	require_once("../LivreDAO.class.php");
	require_once('../globalDAO.php');

	$dao = new LivreDAO();

	$livre = $dao -> getTest();
	// print_r($livre);

	$titre = $livre -> getTitre();

	$livres = $dao -> getCollectionLivres(1,2);

	print_r($livres);


?>