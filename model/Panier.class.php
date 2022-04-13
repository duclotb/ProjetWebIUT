<?php
class Panier {
//Attributs
private $livres = array();
private float $prixGlobal;

//constructeur
function __construct(array $livres) {
  $this->livres = $livres;
  $this->prixGlobal = 0;
  foreach($livres as $value) {
  $this->prixGlobal += $value;
  }
}

//Méthodes

//public
public function addPanier(Livre $livre) {
  array_push($this->livres, $livre);
  $this->prixGlobal += $livre->getPrix();
}

public function getPrixGlobal() {
  return $this->prixGlobal;
}

public function getLivres() {
  return $this->livres;
  //returns Collection<Livre>
}

/*public function deletePanier() {
  unset($this);
}*/






}



 ?>
