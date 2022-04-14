<?php
class Compte {
//Attributs
private int $niveau;
private string $mail;
private string $nom;
private string $prenom;
private string $mdp;
private string $dateNaissance;
private $commandes = array();
private Panier $panier;
private ListeEnvie $listeEnvie;

//constructeur
function __construct(int $niveau, string $mail, string $nom, string $prenom, string $mdp, string $dateNaissance) {
  $this->niveau = $niveau;
  $this->mail = $mail;
  $this->nom = $nom;
  $this->prenom = $prenom;
  $this->mdp = $mdp;
  $this->dateNaissance = $dateNaissance;
}

//Méthodes

//public
public function getOrder(int $id) {
  return $this->commande[$id];
  //returns Commande
}



public function addLivreListeEnvie(Livre $livre) {

}

public function isAdmin() {

  //returns bool
}

/*public function deleteAccount() {
unset($this);
}*/

public function getMdp() {
  return $this->mdp;
}

public function getOrders() {
 return $this->commandes;
  //returns Collection<Commande>
}

public function Commandes(array $livres, Compte $compte) {

}

public function deletePanier() {
unset($this->panier);
}

public function getPanier() {
  return $this->panier;
  //returns Panier
}

public function informationsCompte() {
  //returns infosCompte
}

public function getNom() {
  return $this->nom;
}

public function getPrenom() {
  return $this->prenom;
}

public function getMail() {
  return $this->mail;
}

public function addPanier(Livre $livre) {

}

//Cette fonction récupère la liste des livres du panier depuis le compte puis son panier
public function validerPanier() {
  $panier = $this->getPanier();
  $livres = array();
  $livres = $panier->getLivres();
}

//private
private function getListeEnvie() {
  //returns listeEnvie
}







}



 ?>
