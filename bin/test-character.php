<?php

use App\Action\AttackAction;
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

echo "Merlin attaque Arthur !\n";

$merlin->doAction(new AttackAction('Attaque'), $arthur);

echo $arthur;
echo $merlin;

echo "Arthur attaque Merlin !\n";

$arthur->doAction(new AttackAction('Attaque'), $merlin);

echo $arthur;
echo $merlin;

echo "Est-ce que merlin est mort ? \n";

echo $merlin->isDead();
