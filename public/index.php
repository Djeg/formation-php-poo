<?php

require_once('../src/Personnage.php');

$merlin = new Personnage();
$merlin->vie = 50;
$merlin->attaque = 40;

$arthur = new Personnage();
$arthur->vie = 20;
$arthur->attaque = 30;

// Pouvoir fournir un paramètre à notre
// méthode "regenerer" afin de spécifier
// le nombre de point de vie à rajouter
// notre vie
$arthur->regenerer(10);
$merlin->regenerer(20);

echo $arthur->afficher();
echo "<br />";
echo $merlin->afficher();
