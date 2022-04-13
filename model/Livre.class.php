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
  private integer $anneeEdition;
  private string $pages;
  private string $format;
  private string $section;
  private float $prix;
  private string $synopsis;
  private $commentaires = array();


  //Constructeur
  function __construct(string $numISBN, string $titre, string $sousTitre, string $auteurNom, string $auteurPrenom, string $auteurFalcutatifNom, string $auteurFalcutatifPrenom, string $editeur, integer $anneeEdition, string $pages, string $format, string $section, float $prix, string $synopsis, array $commentaires ) {

    $this->numISBN = $numISBN;

    $this->titre = $titre;
    $this->sousTitre = $sousTitre;

    $this->auteurNom = $auteurNom;
    $this->auteurPrenom = $auteurPrenom;

    $this->auteurFacultatifNom = $auteurFacultatifNom;
    $this->auteurFacultatifPrenom = $auteurFacultatifPrenom;

    $this->$editeur = $editeur;
    $this->$anneeEdition = $anneeEdition;
    $this->$pages = $pages;
    $this->$format = $format;
    $this->$section = $section;
    
    $this->synopsis = $synopsis;
    $this->prix = $prix;
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
