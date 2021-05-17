<?php

require_once '../src/Personnage.php';

$merlin = new Personnage();
$arthur = new Personnage();

$merlin->attaque = 50;

$merlin->afficher();

echo '<br />';

$arthur->afficher();

echo '<br />';

$arthur->attaquer($merlin);
$merlin->attaquer($arthur);

$merlin->afficher();

echo '<br />';

$arthur->afficher();
