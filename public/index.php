<?php

require_once '../src/Personnage.php';

$merlin = new Personnage('Merlin', 100, 40);
$arthur = new Personnage('Arthur', 100, 10);

$merlin->afficher();

echo '<br />';

$arthur->afficher();

echo '<br />';

$arthur->attaquer($merlin);
$merlin->attaquer($arthur);

$merlin->afficher();

echo '<br />';

$arthur->afficher();
