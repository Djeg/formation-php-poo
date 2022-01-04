<?php

// Cette ligne nous d'importer un fichier php
require_once 'Personnage.php';

// Création des instances de Personnages
$arthur = new Personnage();
$arthur->vie = 90;
$arthur->attaque = 50;

$arthur->regenerer();

$merlin = new Personnage();
$merlin->vie = 80;
$merlin->attaque = 60;

$merlin->regenerer(30);

// On debug ce que contient des variables
var_dump($arthur);
var_dump($merlin);
