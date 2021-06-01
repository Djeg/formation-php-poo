<?php

require_once('../src/Personnage.php');



// 1. Créer un constructeur dans la class
//    Personnage qui accèpte un string $nom
// 2. Dans le constructeur, initializer
//    la propriété $nom de notre personnage.
// 3. Retoucher la méthode "afficher" pour afficher
//    le nom en plus de la vie et de l'attaque.

$merlin = new Personnage("Merlin l'enchanteur", 50, 40);

$arthur = new Personnage("Le roi Arthur", 20, 30);

$morganne = new Personnage("Morganne la sorcière", 150, 40);

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
