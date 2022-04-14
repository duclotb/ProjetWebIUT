<?php

	require_once('../config.php');
	require_once('../model/globalDAO.php');
	require_once('../model/CompteDAO.class.php');

	require_once(__DIR__.'/../framework/view.fw.php');

	$dao = new CompteDAO();

	$nom = $_POST["nom"] ?? "";
	$mail = $_POST["mail"] ?? "";

	$compte = $dao -> getCompte($mail);

	
	$view = new View();

	if ($compte){
		$view -> assign("message", "Votre compte existe déjà");
		$view -> display("signUpRejected.view.php");
	} else {
		$dao -> insertCompte($_POST);

		$_SESSION["mail"] = $_POST["mail"];
		$_SESSION["prenom"] = $_POST["prenom"];
		
		$view -> assign("nom", $_POST["nom"]);
		$view -> assign("prenom", $_POST["prenom"]);
		$view -> assign("dateNaissance", $_POST["dateNaissance"]);
		$view -> assign("mail", $_POST["mail"]);



		$view -> display("signUpAccepted.view.php");
	}

?>
