<?php
class ListeEnvie {
//Attributs
private $livres = array();

//constructeur
function __construct(array $livres) {
  $this->livres = $livres;
}

//Méthodes

//public
public function addLivre(Livre $livre) {
  array_push($this->livres, $livre);
}

//private
/*private function deleteListeEnvie() {
  unset($this);
}*/


}




 ?>
