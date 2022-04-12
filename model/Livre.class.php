<?php
class Livre {
//Attributs
private string $titre;
private $auteurs = array();
private string $synopsis;
private float $prix;
private string $numISBN;
private $commentaires = array();


//Constructeur
function __construct(string $titre, array $auteurs, string $synopsis, float $prix, string $numISBN, array $commentaires) {
  $this->titre = $titre;
  $this->auteurs = $auteurs;
  $this->synopsis = $synopsis;
  $this->prix = $prix;
  $this->numISBN = $numISBN;
  $this->commentaires = $commentaires;
}

//Méthodes

//public


public function getTitre() {
  return $this->titre;
}

public function getAuteurs() {
  return $this->auteurs;
}

public function getSynopsis() {
  return $this->synopsis;
}

public function getPrix() {
  return $this->prix;
}

public function getNumISBN() {
  return $this->numISBN;
}

public function getCommentaires() {
    return $this->commentaires;
}

/*public function getInformations() {
  $array = array();
  $titre = $this->getTitre();
  $auteurs = $this->getAuteurs();
  $synopsis = $this->getSynopsis();
  $prix = $this->getPrix();
  $numISBN = $this->getNumISBN();
  $commentaires = $this->getCommentaires();
  array_push($array, $titre, $auteurs, $synopsis, $prix, $numISBN, $commentaires);
  return $array;//retourne un tableau d'informations sur le livre, pour auteurs et commentaires donc un tableau de tableau
}*/

public function createComment(string $content, Compte $c, Livre $livre) {
  string $dateCreation = date("mm'/'dd'/'y");
  $comment = new Commentaire($content, $dateCreation, $c, $livre);
  $this->addComment();
}

public function deleteComment(int $id) {
  unset($this->commentaires[$id]);
}


//private
private function addComment(Commentaire $comment) {
  array_push($this->commentaires, $comment);
}



}



 ?>
