<?php

require_once '../src/Personnage.php';

$merlin = new Personnage();
$arthur = new Personnage();

$merlin->vie = 40;
$merlin->attaque = 20;

$merlin->regenerer(80);

$arthur->attaquer($merlin);
$merlin->attaquer($arthur);

$arthur->vie = 100;
$arthur->attaque = 50;

$merlin->afficher();

echo '<br />';

$arthur->afficher();
