<?php


// Nous incluons l'autoload de composer

use App\Core\Configuration;

require __DIR__ . '/../vendor/autoload.php';

// Tout d'abord nous testons si la page demandé est une resource
// dite « statique ». Un fichier CSS, JS etc ...
if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {
    // On demande à PHP de ne pas se lancer. Ainsi ce sera le fichier
    // demandé qui sera retourné dans notre navigateur
    return false;
}

// Création d'un objet configuration
$config = new Configuration(__DIR__ . '/..');

// On affiche le nom de la base de données contenu
// dans notre fichier ".env"
echo $config->get('DATABASE_NAME');
