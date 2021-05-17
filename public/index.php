<?php

require_once '../src/Personnage.php';
require_once '../src/Magician.php';

$merlin = new Magician('Merlin');
$arthur = new Personnage('Arthur');

$arthur->attaquer($merlin);
$merlin->afficher();

echo '<br/>';

$arthur->afficher();
