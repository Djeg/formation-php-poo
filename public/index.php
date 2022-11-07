<?php

// On inclue l'autoload composer nous permettant d'utiliser nos classes

use App\Core\View;

require __DIR__ . '/../vendor/autoload.php';

// On test si l'on demande un fichier se terminant par les extensions suivante
if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {
    // On demande à PHP de ne pas se lancer. Ainsi ce sera le fichier
    // demandé qui sera retourné dans notre navigateur
    return false;
}

// Créer une View
$view = new View(__DIR__ . '/../templates');

// Affiche le « template » (la page) hello.php
echo $view->render('hello', ['name' => 'John Doe']);
