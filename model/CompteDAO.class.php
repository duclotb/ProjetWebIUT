<?php
require_once(dirname(__FILE__).'/Compte.class.php');
require_once(dirname(__FILE__).'/globalDAO.php');

  // Le Data Access Objet
  class CompteDAO {
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
      $this -> db = getDAO();
    }

	function getCompte(string $mail){
		$req = "SELECT * FROM compte WHERE mail='$mail'";
		$pdo = $this -> db -> query($req);
		$result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

		$compte = NULL;

		if (!empty($result)) {
			$compte = new Compte($result[0]['admin'],$result[0]['mail'], $result[0]['nom'], $result[0]['prenom'], $result[0]['mdp'], $result[0]['dateNaissance']);
		} 
		return $compte;
	}

	function insertCompte(array $info){
		$req = 'INSERT INTO compte (mail, prenom, nom, dateNaissance, mdp) VALUES ("'.$info["mail"].'", "'.$info["prenom"].'", "'.$info["nom"].'", '.$info["dateNaissance"].', "'.$info["mdp"].'")';
		$pdo = $this -> db -> exec($req);
	}


  }
?>
