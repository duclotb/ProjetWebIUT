<?php

require_once('Livre.class.php');

$auteurs = array('Stendhal','Charlemagne');
$synopsis = "Un homme qui tombe amoureux d'une femme";
$commentaires = array("c'est génial", "cest nul");

$livre = new Livre('le Rouge et le Noir', $auteurs, $synopsis,3.4,'54',$commentaires);

foreach ($livre->getAuteurs() as $key => $value) {
  print($value);
}

foreach ($livre->getInformations() as $key => $value) {
  print($value);
}

 ?>
