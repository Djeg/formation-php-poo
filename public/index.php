<?php

require(__DIR__ . '/../vendor/autoload.php');

$merlin = new App\Personnage("Merlin l'enchanteur", 50, 40);
$arthur = new App\Chevalier("Le roi Arthur", 20, 30);
$morganne = new App\Magicien("Morganne la sorcière", 150, 40);
$lancelot = new App\Chevalier("Lancelot du lac");

echo $arthur->afficher();
echo "<br />";
echo $merlin->afficher();
echo "<br />";
echo $morganne->afficher();

echo "<br />";
echo "Arthur attaque merlin !";
echo "<br />";

$arthur->attaque($merlin); // Merlin vie === 20 (50 - 30)

echo $arthur->afficher();
echo "<br />";
echo $merlin->afficher();

echo "<br />";
echo "Morganne soigne merlin !";
echo "<br />";

$morganne->soigne($merlin);

echo $arthur->afficher();
echo "<br />";
echo $merlin->afficher();
