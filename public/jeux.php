<?php

require_once 'Personnage.php';

$arthur = new Personnage('Roi Arthur', 80, 40);

$merlin = new Personnage("Merlin l'enchanteur");
$merlin->vie = 70;
$merlin->attaque = 50;

$morganne = new Personnage('Morganne la fée');

echo $arthur->afficher();
echo $merlin->afficher();
echo $morganne->afficher();

$arthur->attaquer($merlin);

echo $arthur->afficher();
echo $merlin->afficher();

$merlin->regenerer(90);

echo $arthur->afficher();
echo $merlin->afficher();
