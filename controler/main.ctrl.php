<?php
// Inclus le mini framework
require_once('../model/globalDAO.php');
require_once('../model/LivreDAO.class.php');

require_once(__DIR__.'/../framework/view.fw.php');

$dao = new LivreDAO();

$livres = $dao -> getCollectionLivres(0, 100);

$titres = array();
$editeurs = array();
$auteurs = array();
$prix = array();

foreach ($livres as $key => $livre) {
	array_push($titres, $livre -> getTitre());
	array_push($editeurs, $livre -> getEditeur());
	array_push($auteurs, $livre -> getAuteurs());
	array_push($prix, $livre -> getPrix());
}


$view = new View();

$view -> assign("titres", $titres);
$view -> assign("editeurs", $editeurs);
$view -> assign("auteurs", $auteurs);
$view -> assign("prix", $prix);

$view -> assign("nombre", count($livres));

$view -> display("homepage.view.php");

?>
