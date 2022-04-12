<?php
require_once(dirname(__FILE__).'/livre.class.php');

  // Le Data Access Objet
  class LivreDAO {
    private $db;

    // Constructeur chargé d'ouvrir la BD
    function __construct() {
      $database = 'sqlite:'.dirname(__FILE__).'/../data/livre.db';

      try {
        $this -> db = new PDO($database);
        if (!$this -> db) {die("Database error");}
      } catch (PDOException $e) {
        die("PDO Error :".$e -> getMessage()."$this -> database\n");
      }

    }

    // Accès à une musique
    function get(int $id) : Music {

      $req = "SELECT * FROM music WHERE id='$id'";

      $pdo = $this -> db -> query($req);

      $result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

      $music = new Music($result[0]["id"], $result[0]["author"], $result[0]["title"], $result[0]["cover"], $result[0]["mp3"], $result[0]["category"]);

      return $music;

    }

    // Retourne l'idf minimum
    function minId() : int {

      $req = "SELECT min(id) as min FROM music";
      $pdo = $this -> db -> query($req);
      $result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

      return $result[0]["min"];
    }

    // Retourne l'idf maximum
    function maxId() : int {
      $req = "SELECT max(id) as max FROM music";
      $pdo = $this -> db -> query($req);
      $result = $pdo -> fetchAll(PDO::FETCH_ASSOC);

      return $result[0]["max"];
    }
  }
?>
