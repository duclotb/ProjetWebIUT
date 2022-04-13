<?php

	require_once("../LivreDAO.class.php");
	require_once('../globalDAO.php');

	$dao = new LivreDAO();

	$livre = $dao -> getTest();
	print_r($livre);

	$titre = $livre -> getTitre();

	$livres = $dao -> getCollectionLivres(1,2);

	$titres = array();
	$editeurs = array();
	$auteurs = array();
	$prix = array();
	
	foreach ($livres as $key => $livre) {
		array_push($titres, $livre -> getTitre());
		array_push($editeurs, $livre -> getEditeur());
		array_push($auteurs, $livre -> getAuteurs());
		array_push($prix, $livre -> getPrix());
	}

	print_r($auteurs);


?>