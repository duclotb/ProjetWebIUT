<?php
// Inclus le mini framework
require_once('../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

$view = new View();

$view -> display("signUp.view.php");

?>
