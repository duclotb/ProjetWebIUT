<?php

class Commentaire {
//Attributs
private string $content;

private string $dateCreation;

private Compte $createur;

private Livre $livre;

//constructeur
function __construct(string $content, string $dateCreation, Compte $createur, Livre $livre)
{
  $this->content = $content;
  $this->dateCreation = $dateCreation;
  $this->createur = $createur;
  $this->livre = $livre;
}

}




 ?>
