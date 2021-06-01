<?php

require_once('../src/Personnage.php');

$merlin = new Personnage();
$merlin->vie = 50;
$merlin->attaque = 40;

$arthur = new Personnage();
$arthur->vie = 20;
$arthur->attaque = 30;

$morganne = new Personnage();
$morganne->vie = 150;
$morganne->attaque = 40;

echo $arthur->afficher();
echo "<br />";
echo $merlin->afficher();

echo "<br />";
echo "Arthur attaque merlin !";
echo "<br />";
$arthur->attaque($merlin); // Merlin vie === 20 (50 - 30)

echo $arthur->afficher();
echo "<br />";
echo $merlin->afficher();

echo "<br />";
echo "Arthur soigne merlin !";
echo "<br />";

$arthur->soigne($merlin);

echo $arthur->afficher();
echo "<br />";
echo $merlin->afficher();
