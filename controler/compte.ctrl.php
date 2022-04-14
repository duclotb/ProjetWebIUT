<?php

    require_once('../model/globalDAO.php');
    require_once('../model/CompteDAO.class.php');
    require_once(__DIR__.'/../framework/view.fw.php');

    $dao = new CompteDAO();
    $mail = "admin@admin";
    $compte = $dao -> getCompte($mail);
require_once('../config.php');
require_once('../model/globalDAO.php');
require_once('../model/LivreDAO.class.php');
require_once('../model/ListeEnvie.class.php');
require_once('../model/Panier.class.php');
require_once('../model/Compte.class.php');
require_once('../model/Livre.class.php');

    //Informations à récupérer
    $nom = $compte->getNom();
    $prenom = $compte->getPrenom();
    $mail = $compte->getMail();
    $datenaissance = $compte->getDateNaissance();

    // Vues
    $view = new View();
    $view->assign("nom", $nom);
    $view->assign("prenom", $prenom);
    $view->assign("mail", $mail);
    $view->assign("datenaissance", $datenaissance);

    $view ->display ("compte.view.php");

 ?>
