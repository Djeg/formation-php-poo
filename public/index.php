<?php

require_once('../src/Personnage.php');
require_once('../src/Magicien.php');
require_once('../src/Chevalier.php');

// 1. Créer un fichier dans src: Chevalier.php
// 2. À l'intérieur de Chavalier.php nous créons la 
//    class Chevalier qui hérite de Personnage
// 3. On rédéfinie la méthode "attaque" de notre classe
//    chevalier pour effectuer 20 dégat de plus !
// 4. Dans public/index.php nous assignons $arthur à une
//    classe chavalier

$merlin = new Personnage("Merlin l'enchanteur", 50, 40);
$arthur = new Chevalier("Le roi Arthur", 20, 30);
$morganne = new Magicien("Morganne la sorcière", 150, 40);

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
