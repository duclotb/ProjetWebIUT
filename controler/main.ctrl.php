<?php
// Inclus le mini framework
require_once('../model/globalDAO.php');
require_once('../model/LivreDAO.class.php');

require_once(__DIR__.'/../framework/view.fw.php');

$dao = new LivreDAO();

$livre = $dao -> getTest();

$titre = $livre -> getTitre();

$view = new View();

$view -> assign("titre", $titre);
$view -> display("homepage.view.php");

?>
