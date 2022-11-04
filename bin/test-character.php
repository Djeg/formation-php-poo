<?php

use App\Armor;
use App\Character;
use App\Weapon;

require __DIR__ . '/../vendor/autoload.php';

$arthur = new Character('Arthur');
$merlin = new Character(
    'Merlin',
    80,
    new Weapon('Gros Baton', 25),
    new Armor('Toge', 10),
);

$arthur->equipWeapon(new Weapon('Excalibur', 90));
$arthur->equipArmor(new Armor('Cuirasse', 20));

echo $arthur;
echo $merlin;
