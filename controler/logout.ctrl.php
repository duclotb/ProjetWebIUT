<?php
// Inclus le mini framework
require_once('../config.php');
require_once(__DIR__.'/../framework/view.fw.php');

session_destroy();

header('Location: homepage.ctrl.php');


?>
