<?php


use App\Core\View;

// Nous incluons l'autoload de composer
require __DIR__ . '/../vendor/autoload.php';

// Tout d'abord nous testons si la page demandé est une resource
// dite « statique ». Un fichier CSS, JS etc ...
if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {
    // On demande à PHP de ne pas se lancer. Ainsi ce sera le fichier
    // demandé qui sera retourné dans notre navigateur
    return false;
}

// Création de la view
$view = new View(__DIR__ . '/../templates', ['app_name' => 'blog']);

// affichage de la page hello :
echo $view->render('hello', ['name' => 'John Doe']);
