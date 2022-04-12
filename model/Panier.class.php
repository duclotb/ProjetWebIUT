<?php
class Panier {
//Attributs
private $livres = array();
private Compte $compte;
private float $prixGlobal;

//constructeur
function __construct(array $livres, Compte $compte) {
  $this->livre = $livres;
  $this->compte = $compte;
  $this->prixGlobal = 0;
}

//Méthodes

//public
public function addPanier(Livre $livre) {
  array_push($this->livres, $livre);
  $prixGlobal += $livre->getPrix();
}

public function getLivres() {
  return $this->livres;
  //returns Collection<Livre>
}

public function deletePanier() {
  unset($this);
}






}



 ?>
