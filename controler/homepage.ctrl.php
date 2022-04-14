<?php
// Inclus le mini framework
require_once('../model/globalDAO.php');
require_once('../model/LivreDAO.class.php');

require_once(__DIR__.'/../framework/view.fw.php');

$keywords = $_GET['keywords'] ?? "";
$dao = new LivreDAO();

if ($keywords == ""){
	$livres = $dao -> getCollectionLivres(0, 120);
} else {
	$arrKeywords = explode(' ', $keywords);
	$livres = array();
	foreach ($arrKeywords as $key => $word) {


		$buffer = $dao -> getLivresKeyword($word);


		foreach ($buffer as $oldISBN => $livre) {
			$buffer[$buffer[$oldISBN]->getNumISBN()] = $buffer[$oldISBN];
			unset($buffer[$oldISBN]);
		}

		$livres = array_merge($livres, $buffer);
	}
}

$isbn = array();
$titres = array();
$editeurs = array();
$auteurs = array();
$prix = array();

foreach ($livres as $key => $livre) {
	array_push($isbn, $livre -> getNumISBN());
	array_push($titres, $livre -> getTitre());
	array_push($editeurs, $livre -> getEditeur());
	array_push($auteurs, $livre -> getAuteurs());
	array_push($prix, $livre -> getPrix());
}


$view = new View();

$view -> assign("isbn", $isbn);
$view -> assign("titres", $titres);
$view -> assign("editeurs", $editeurs);
$view -> assign("auteurs", $auteurs);
$view -> assign("prix", $prix);

$view -> assign("nombre", count($livres));

$view -> display("homepage.view.php");

?>
