<?php

use App\Armor;
use App\Weapon;

require __DIR__ . '/../vendor/autoload.php';

$gun = new Weapon('Big Gun', 50);
$fork = new Weapon('Fourchette En Plastoc', 5);

$skirt = new Armor('Robe de soirée', 2);
$cuirasse = new Armor('Cuirasse en fonte', 90);

echo "Arme : {$gun}\n";
echo "Arme : {$fork}\n";

echo "Armure : {$skirt}\n";
echo "Armure : {$cuirasse}";
