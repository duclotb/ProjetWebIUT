<?php
require_once(dirname(__FILE__).'/Panier.class.php');
require_once(dirname(__FILE__).'/LivreDAO.class.php');
require_once(dirname(__FILE__).'/globalDAO.php');

  // Le Data Access Objet
  class PanierDAO {
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
      $this -> db = getDAO();
    }

	function getPanier(string $mail){
		// Permet de récupérer le panier de l'utilisateur de mail $mail
		$req = "SELECT * FROM panier WHERE mail='$mail'";
		$pdo = $this -> db -> query($req);
		$result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

		$panier = NULL;

		if (!empty($result)) {
			$dao = new LivreDAO();
			$panier = new Panier();
			for ($i = 0; $i < count($result); $i++){
				$livre = $dao -> getLivre($result[$i]['isbn']);
				$panier -> addLivre($livre);
			} 
		} 
		

		return $panier;
	}

  }
?>
