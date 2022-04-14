<?php

require_once('../config.php');
require_once('../model/globalDAO.php');
require_once('../model/LivreDAO.class.php');
require_once('../model/ListeEnvie.class.php');
require_once('../model/Panier.class.php');
require_once('../model/Compte.class.php');
require_once('../model/Livre.class.php');

require_once(__DIR__.'/../framework/view.fw.php');


$view = new View();

$view -> display("enCoursDeDev.view.php");

 ?>
