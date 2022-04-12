<?php
// Inclus le mini framework
require_once(__DIR__.'/../framework/view.fw.php');

$view = new View();

$view -> display("homepage.view.php");

?>
