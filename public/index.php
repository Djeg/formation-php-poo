<?php

// Nous incluons l'autoload de composer
require __DIR__ . '/../vendor/autoload.php';

// Tout d'abord nous testons si la page demandé est une resource
// dite « statique ». Un fichier CSS, JS etc ...
if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {
    // On demande à PHP de ne pas se lancer. Ainsi ce sera le fichier
    // demandé qui sera retourné dans notre navigateur
    return false;
}

echo "<h1>Frontend Controller</h1>";
