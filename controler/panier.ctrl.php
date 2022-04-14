<?php

require_once('../model/globalDAO.php');
require_once('../model/LivreDAO.class.php');
require_once('../model/ListeEnvie.class.php');
require_once('../model/Panier.class.php');
require_once('../model/Compte.class.php');
require_once('../model/Livre.class.php');

require_once(__DIR__.'/../framework/view.fw.php');


// $isbn = $_GET['isbn'] ?? "";
//
//
// //initialisation des objets
// $commandes = array();
// $listeLivres = array();
// $livresCommande = array();
// $listeEnvie = new ListeEnvie($listeLivres);
// $panier = new Panier($livresCommande);
// $compte = new Compte(1,'camille.rachidi@gmail.com','rachidi','camille','mdp','11/04/97',$commandes,$panier,$listeEnvie);
//
//
//
//   $dao = new LivreDAO();
//   //instanciation du livre récupéré dans la DAO
//   $livre = $dao->getLivre('2-09-211353-4');
//
//   //ajout du livre instancié dans le panier créé
//   $panier->addPanier($livre);
//
//
//   $listeLivresPanier = $panier->getLivres();
//
//   foreach($listeLivresPanier as $value) {
//
//   $titre = $livre->getTitre();
//   $prix = $livre->getPrix();
//   $prixGlobal = $panier->getPrixGlobal();
//
//   //assignation des variables à la vue
   $view = new View();
//
//   $view->assign("prixGlobal",$prixGlobal);
//
//   $view->assign("titre",$titre);
//   $view->assign("prix",$prix);
//
//   $view->assign("tabLivres",$livresCommande);
//   $view->assign("nombre",count($panier->getLivres()));
//
//   }
//
   $view -> display("enCoursDeDev.view.php");

 ?>
