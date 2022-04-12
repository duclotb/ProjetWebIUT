<?php

class Commande
{
  //Attributs
  private int $numeroID;
  private string $dateAchat;
  private string $dateReception;
  private Compte $compte;
  private $livres = array();
  private float $prix;

  //constructeur
  function __construct(Compte $compte, string $dateAchat, string $dateReception, int $numeroID, array $livres, float $prix)
   {
     $this->compte = $compte;
     $this->dateAchat = $dateAchat;
     $this->dateReception = $dateReception;
     $this->numeroID = $numeroID;
     $this->livres = $livres;
     $this->prix = $prix;
  }

  //Méthodes

  private function deleteOrder() {
    unset($this);
  }

  public function getInfosCommande() {

    //returns infosCommande
  }

  private function getLivresCommande() {

    //returns Collection<Livre>
  }

  private function getDateAchat() {
    return $this->dateAchat;
  }

  private function getDateReception() {
    return $this->dateReception;
  }

private function getPrix() {
    return $this->prix;
  }



}



 ?>
