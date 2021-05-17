<?php

require_once '../src/Personnage.php';

$merlin = new Personnage('Merlin');
$arthur = new Personnage('Arthur');

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
