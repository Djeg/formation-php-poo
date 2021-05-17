<?php

require_once '../src/Personnage.php';

$merlin = new Personnage('Merlin');
$merlin->vie = 50;
$merlin->attaque = 40;

echo $merlin->nom;

$arthur = new Personnage('Arthur');
$arthur->vie = 100;
$arthur->attaque = 30;

$arthur->attaquer($merlin);

$merlin->afficher();

echo '<br/>';

$arthur->afficher();
