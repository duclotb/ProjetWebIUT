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
$prix = array();
$imageURLs = array();

foreach ($livres as $key => $livre) {
  array_push($titres, $livre -> getTitre());
  array_push($prix, $livre -> getPrix());
  array_push($imageURLs, $livre -> getImageURL());
  array_push($isbn, $livre -> getNumISBN());
}

$prixTotal = $panier -> getPrixGlobal();
$nombreArticle = $panier -> getNombreArticles();

$view = new view();

$view -> assign("titres", $titres);
$view -> assign("prix", $prix);
$view -> assign("imageURLs", $imageURLs);
$view -> assign("nombre", count($livres));
$view -> assign("prixTotal", $prixTotal);
$view -> assign("isbn", $isbn);
$view -> assign("nombreArticle", $nombreArticle);

$view -> display("panier.view.php");

?>
