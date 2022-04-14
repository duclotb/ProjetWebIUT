<?php

require_once('../config.php');
require_once('../model/globalDAO.php');
require_once('../model/LivreDAO.class.php');
require_once('../model/ListeEnvie.class.php');
require_once('../model/Panier.class.php');
require_once('../model/Compte.class.php');
require_once('../model/Livre.class.php');

require_once(__DIR__.'/../framework/view.fw.php');


$listeLivresPanier = $panier->getLivres();

foreach($listeLivresPanier as $value) {

$titre = $livre->getTitre();
$prix = $livre->getPrix();
$prixGlobal = $panier->getPrixGlobal();

//assignation des variables à la vue
$view = new View();

$view->assign("prixGlobal",$prixGlobal);

$view->assign("titre",$titre);
$view->assign("prix",$prix);

$view->assign("tabLivres",$livresCommande);
$view->assign("nombre",count($panier->getLivres()));

}

$view -> display("commande.view.php");


  ?>
