<?php

require_once('../config.php');
require_once('../model/globalDAO.php');
require_once('../model/PanierDAO.class.php');


require_once(__DIR__.'/../framework/view.fw.php');


$mail = $_SESSION["mail"] ?? "";

$dao = new PanierDAO();

$panier = $dao -> getPanier($mail);
$livres = $panier -> getLivres();

$isbn = array();
$titres = array();
$editeurs = array();
$auteurs = array();
$prix = array();
$synopsis = array();
$imageURLs = array();

foreach ($livres as $key => $livre) {
  array_push($titres, $livre -> getTitre());
  array_push($prix, $livre -> getPrix());
  array_push($imageURLs, $livre -> getImageURL());
}

$prixTotal = $panier -> getPrixGlobal();

$view = new view();

$view -> assign("titres", $titres);
$view -> assign("prix", $prix);
$view -> assign("imageURLs", $imageURLs);
$view -> assign("nombre", count($livres));
$view -> assign("prixTotal", $prixTotal);

$view -> display("panier.view.php");

// //initialisation des objets
// //$commandes = array();
// //$listeLivres = array();
// $livresCommande = array();
// //$listeEnvie = new ListeEnvie($listeLivres);
// $panier = new Panier($livresCommande);
// //$compte = new Compte(1,'camille.rachidi@gmail.com','rachidi','camille','mdp','11/04/97',$commandes,$panier,$listeEnvie);



// $dao = new LivreDAO();
// //instanciation du livre récupéré dans la DAO
// $livre = $dao->getLivre('2-03-652407-9');

// //ajout du livre instancié dans le panier créé
// $panier->addPanier($livre);

// $listeLivresPanier = $panier->getLivres();

// foreach($listeLivresPanier as $value) {

// $titre = $livre->getTitre();
// $prix = $livre->getPrix();
// $prixGlobal = $panier->getPrixGlobal();

//    //assignation des variables à la vue
//    $view = new View();

//    $view->assign("prixGlobal",$prixGlobal);

//    $view->assign("titre",$titre);
//    $view->assign("prix",$prix);

//    $view->assign("tabLivres",$livresCommande);
//    $view->assign("nombre",count($panier->getLivres()));

//    }

//    $view -> display("panier.view.php");

 ?>
