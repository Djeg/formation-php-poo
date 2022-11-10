<?php

// On inclue l'autoload composer nous permettant d'utiliser nos classes

use App\Core\Router;
use App\Core\Container;

require __DIR__ . '/../vendor/autoload.php';

// On test si l'on demande un fichier se terminant par les extensions suivante
if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {
    // On demande à PHP de ne pas se lancer. Ainsi ce sera le fichier
    // demandé qui sera retourné dans notre navigateur
    return false;
}

// Démarage de l'application
echo Container::boot()
    ->get(Router::class)
    ->start($_SERVER['REQUEST_URI']);
