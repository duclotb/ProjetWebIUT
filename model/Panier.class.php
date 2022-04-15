<?php
class Panier {
  //Attributs
  private $livres;

  //constructeur
  function __construct() {
    $this -> livres = array ();
  }

  //Méthodes


  //public
  public function addLivre(Livre $livre) {
    array_push($this->livres, $livre);
  }

  public function getPrixGlobal(){
    $prix = 0;
    if ($this -> livres != null){
      foreach ($this -> livres as $key => $livre) {
        $prix += $livre -> getPrix();
      }
    }
    return $prix;
  }

  
  public function getLivres() {
    return $this->livres;
    //returns Collection<Livre>
  }

}

 ?>
