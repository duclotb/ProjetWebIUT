<?php
require_once(dirname(__FILE__).'/Livre.class.php');
require_once(dirname(__FILE__).'/globalDAO.php');

  // Le Data Access Objet
  class LivreDAO {
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
      $this -> db = getDAO();
    }


    function getTest() : Livre {     
      $req = "SELECT * FROM livre WHERE isbn='2-09-211356-9'";
      $pdo = $this -> db -> query($req);
      $result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

      $prix = floatval($result[0]["prix"]);
      $synopsis = "";
      $commentaires = array();

      if ($result[0]["auteurFalcutatifNom"] == null){
        $auteurFacultatifNom = "";
      } else {
        $auteurFacultatifNom = $result[0]["auteurFalcutatifNom"];
      }

      if ($result[0]["auteurFalcutatifPrenom"] == null){
        $auteurFacultatifPrenom = "";
      } else {
        $auteurFacultatifPrenom = $result[0]["auteurFalcutatifPrenom"];
      }
    
      $livre = new Livre($result[0]["isbn"], $result[0]["titre"], $result[0]["sousTitre"], $result[0]["auteurNom"], $result[0]["auteurPrenom"], $auteurFacultatifNom, $auteurFacultatifPrenom, $result[0]["editeur"], $result[0]["anneeedition"], $result[0]["pages"], $result[0]["format"], $result[0]["section"], $prix, $synopsis, $commentaires);

      return $livre;
    }

    function getLivre(string $isbn) : Livre {     
      $req = "SELECT * FROM livre WHERE isbn='$isbn'";
      $pdo = $this -> db -> query($req);
      $result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

      $prix = floatval($result[0]["prix"]);
      $synopsis = "";
      $commentaires = array();

      if ($result[0]["auteurFalcutatifNom"] == null){
        $auteurFacultatifNom = "";
      } else {
        $auteurFacultatifNom = $result[0]["auteurFalcutatifNom"];
      }

      if ($result[0]["auteurFalcutatifPrenom"] == null){
        $auteurFacultatifPrenom = "";
      } else {
        $auteurFacultatifPrenom = $result[0]["auteurFalcutatifPrenom"];
      }
    
      $livre = new Livre($result[0]["isbn"], $result[0]["titre"], $result[0]["sousTitre"], $result[0]["auteurNom"], $result[0]["auteurPrenom"], $auteurFacultatifNom, $auteurFacultatifPrenom, $result[0]["editeur"], $result[0]["anneeedition"], $result[0]["pages"], $result[0]["format"], $result[0]["section"], $prix, $synopsis, $commentaires);

      return $livre;
    }

    function getCollectionLivres(int $offset, int $number){

      $req = "SELECT isbn FROM livre LIMIT $number OFFSET $offset";
      $pdo = $this -> db -> query($req);
      $result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

      $buffer = array();

      for ($i = 0; $i < $number; $i++){

        array_push($buffer, $this -> getLivre($result[$i]['isbn']));

      }

      return $buffer;

    }
  }
?>
