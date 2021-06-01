<?php

require_once('../src/Personnage.php');

$merlin = new Personnage();
$merlin->vie = 50;
$merlin->attaque = 40;

$arthur = new Personnage();
$arthur->vie = 90;
$arthur->attaque = 30;

var_dump($merlin);
var_dump($arthur);
