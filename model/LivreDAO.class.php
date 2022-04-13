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

      if ($result[0]["auteurFacultatifNom"] == null){
        $auteurFacultatifNom = "";
      } else {
        $auteurFacultatifNom = $result[0]["auteurFacultatifNom"];
      }

      if ($result[0]["auteurFacultatifPrenom"] == null){
        $auteurFacultatifPrenom = "";
      } else {
        $auteurFacultatifPrenom = $result[0]["auteurFacultatifPrenom"];
      }
    
      $livre = new Livre($result[0]["isbn"], $result[0]["titre"], $result[0]["sousTitre"], $result[0]["auteurNom"], $result[0]["auteurPrenom"], $auteurFacultatifNom, $auteurFacultatifPrenom, $result[0]["editeur"], $result[0]["anneeedition"], $result[0]["pages"], $result[0]["format"], $result[0]["section"], $prix, $synopsis, $commentaires);

      return $livre;
    }

    function getCollectionLivres(int $offset, int $quantity){

      // Permet de récupérer un nombre de livres $quantity à partir de (0+$offset élément) décalage $offset de la table livre.
  

      $req = "SELECT isbn FROM livre LIMIT $quantity OFFSET $offset";
      $pdo = $this -> db -> query($req);
      $result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

      $buffer = array();

      for ($i = 0; $i < $quantity; $i++){

        array_push($buffer, $this -> getLivre($result[$i]['isbn']));

      }

      return $buffer;

    }

    function getLivresKeywords(string $str){

      $req = "SELECT isbn FROM livre WHERE titre LIKE '%$str%' OR soustitre LIKE '%$str%' OR auteurNom LIKE '%$str%' OR auteurPrenom LIKE '%$str%' OR auteurFacultatifNom LIKE '%$str%' OR auteurFacultatifPrenom LIKE '%$str%' OR anneeedition LIKE '%$str%'";

      $pdo = $this -> db -> query($req);
      $result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

      $buffer = array();

      for ($i = 0; $i < count($result); $i++){

        array_push($buffer, $this -> getLivre($result[$i]['isbn']));

      } 
      
      return $buffer;

    }
  }
?>
