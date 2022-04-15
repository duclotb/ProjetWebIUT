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

	function insertLivre(string $isbn, string $mail){
		if (($isbn == "" || $mail == "") || ($this -> isLivreAlreadyInPanier($isbn, $mail))){ 
			return "Erreur lors de l'ajout";
		} else {
			// Ajoute à la table panier un lien entre le livre de numéro isbn $isbn et l'utilisateur de mail $mail
			$req = 'INSERT INTO panier (isbn, mail) VALUES ("'.$isbn.'", "'.$mail.'")';
			$pdo = $this -> db -> exec($req);
			return "Livre ajouté";
		}
	}

	function isLivreAlreadyInPanier(string $isbn, string $mail){
		// Permet de savoir si un livre est dans dans le panier
		$bool = false;
		$panier = $this -> getPanier($mail);

		$livres = $panier -> getLivres();

		foreach ($livres as $key => $livre) {
			if ($livre -> getNumISBN() == $isbn){
				$bool = true;
			}
		}

		return $bool;
	}

  }
?>
