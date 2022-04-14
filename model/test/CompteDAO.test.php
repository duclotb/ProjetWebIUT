<?php

	require_once("../CompteDAO.class.php");
	require_once('../globalDAO.php');

	$dao = new CompteDAO();

	$compte = $dao -> getCompte("tf");

	if ($compte){
		print_r($compte);
	} else {
		print_r("vide");
	}

	$info = array(
		"nom" => "thomas", 
		"prenom" => "auffroy", 
		"mail" => "thomas.auffroy@gmail.com",
		"dateNaissance" => "1999-02-08", 
		"mdp" => "ouioui");

	$dao -> insertCompte($info);

	$compte = $dao -> getCompte("thomas.auffroy@gmail.com");

	if ($compte){
		print_r($compte);
	} else {
		print_r("vide");
	}



?>