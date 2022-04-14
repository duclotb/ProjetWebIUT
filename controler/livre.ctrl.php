<?php
// Inclus le mini framework
require_once('../model/globalDAO.php');
require_once('../model/LivreDAO.class.php');
require_once(__DIR__.'/../framework/view.fw.php');

if (isset($_GET["isbn"])){
    $isbn = $_GET["isbn"];
}
else {
    //idéalement, ajouter une vue erreur
    print("Erreur, isbn non trouvé");
    exit(1);
}

$dao = new LivreDAO();
$livre = $dao->getLivre($isbn);

//Informations à récupérer
$auteurprenom = $livre->getAuteurPrenom();
$auteurnom = $livre->getAuteurNom();
$titre = $livre->getTitre();
$prix = $livre->getPrix();
$synopsis = $livre->getSynopsis();
$genre = $livre->getSousTitre();
$auteurfacultatifnom =$livre->getAuteurFacultatifNom();
$auteurfacultatifprenom = $livre->getAuteurFacultatifPrenom();
$anneeedition = $livre->getAnneeEdition();
$pages = $livre->getPages();
$editeur = $livre->getEditeur();
$format = $livre->getFormat();
$section = $livre->getSection();
$synopsis = $livre -> getSynopsis();
$imageURL = $livre -> getImageURL();

// Si les champs n'existent pas dans la BDD, afficher message
if($auteurprenom == ''){
    $auteurprenom = "Non définis";

    // A retravailler
    if($auteurprenom == '' && $auteurnom !=''){
        $auteurprenom = "M/Mme";
    }
}

if($synopsis == ''){
    $synopsis = "Synopsis inconnu";
}

if($auteurnom == ''){
    $auteurnom = "Non définis";
}

if($titre == ''){
    $titre = "Titre inconnu";
}

if($prix == ''){
    $prix= "Prix inconnu";
}

if($auteurfacultatifnom == ''){
    $auteurfacultatifnom = "";
}

if($auteurfacultatifprenom == ''){
    $auteurfacultatifprenom = "";
}

if($anneeedition == ''){
    $anneeedition = "Inconnu";
}

if($pages == ''){
    $pages = "Inconnu";
}
if($editeur == ''){
    $editeur = "Inconnu";
}

if($format == ''){
    $format = "Inconnu";
}

if($section == ''){
    $section= "Inconnu";
}

if($genre == ''){
    $genre = "Inconnu";
}

// Les champs sont assignés à leur variable
$view = new View();
$view->assign("auteurprenom",$auteurprenom);
$view->assign("auteurnom", $auteurnom);
$view->assign("titre", $titre);
$view->assign("prix",$prix);
$view->assign("synopsis", $synopsis);
$view->assign("genre", $genre);
$view->assign("auteurfacultatifnom",$auteurfacultatifnom);
$view->assign("auteurfacultatifprenom", $auteurfacultatifprenom);
$view->assign("anneeedition",$anneeedition);
$view->assign("pages",$pages);
$view->assign("format",$format);
$view->assign("editeur",$editeur);
$view->assign("section",$section);
$view -> assign("synopsis", $synopsis);
$view -> assign("imageURL", $imageURL);

//A supprimer, utilisée pour afficher toutes les informations de la variable
//var_dump($livre);

$view -> display("livre.view.php");

?>

<!-- si pas de prénom/nom afficher M/Mme X -->

