<?php
class Livre {
  //Attributs
  private string $numISBN;
  private string $titre;
  private string $sousTitre;
  private string $auteurNom;
  private string $auteurPrenom;
  private string $auteurFacultatifNom;
  private string $auteurFacultatifPrenom;
  private string $editeur;
  private int $anneeEdition;
  private string $pages;
  private string $format;
  private string $section;
  private float $prix;
  private string $synopsis;
  private $commentaires = array();


  //Constructeur
  function __construct(string $numISBN = "", string $titre = "", string $sousTitre = "", string $auteurNom = "", string $auteurPrenom = "", string $auteurFacultatifNom = "", string $auteurFacultatifPrenom = "", string $editeur = "", int $anneeEdition = 0, string $pages = "", string $format = "" , string $section = "", float $prix = 0.0, string $synopsis = "0", $commentaires) {

    $this->numISBN = $numISBN;

    $this->titre = $titre;
    $this->sousTitre = $sousTitre;

    $this->auteurNom = $auteurNom;
    $this->auteurPrenom = $auteurPrenom;

    $this->auteurFacultatifNom = $auteurFacultatifNom;
    $this->auteurFacultatifPrenom = $auteurFacultatifPrenom;

    $this->editeur = $editeur;
    $this->anneeEdition = $anneeEdition;
    $this->pages = $pages;
    $this->format = $format;
    $this->section = $section;

    $this->synopsis = $synopsis;
    $this->prix = $prix;
    $this->commentaires = $commentaires;
  }

  //Méthodes

  //public

  public function getSousTitre() {
    return $this->sousTitre;
  }

  public function getAuteurNom() {
    return $this->auteurNom;
  }

  public function getAuteurPrenom() {
    return $this->auteurPrenom;
  }

  public function getAuteurFacultatifNom() {
    return $this->auteurFacultatifNom;
  }

  public function getAuteurFacultatifPrenom() {
    return $this->auteurFacultatifPrenom;
  }

  public function getEditeur() {
    return $this->editeur;
  }

  public function getAnneeEdition() {
    return $this->anneeEdition;
  }

  public function getPages() {
    return $this->pages;
  }

public function getFormat() {
  return $this->format;
}

public function getSection() {
  return $this->section;
}

  public function getTitre() {
    return $this->titre;
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

  public function getAuteurs() {
    $buffer = array();
    array_push($buffer, $this->auteurNom, $this->auteurPrenom, $this->auteurFacultatifNom, $this->auteurFacultatifPrenom);
    print_r($buffer);
    return $buffer;
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

  // public function createComment(string $content, Compte $c, Livre $livre) {
  //   string $dateCreation = date("mm'/'dd'/'y");
  //   $comment = new Commentaire($content, $dateCreation, $c, $livre);
  //   $this->addComment();
  // }

  public function deleteComment(int $id) {
    unset($this->commentaires[$id]);
  }


  //private
  private function addComment(Commentaire $comment) {
    array_push($this->commentaires, $comment);
  }



}



 ?>
