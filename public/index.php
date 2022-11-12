<?php


use App\Core\Container;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;

// Nous incluons l'autoload de composer
require __DIR__ . '/../vendor/autoload.php';

// Tout d'abord nous testons si la page demandé est une resource
// dite « statique ». Un fichier CSS, JS etc ...
if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {
    // On demande à PHP de ne pas se lancer. Ainsi ce sera le fichier
    // demandé qui sera retourné dans notre navigateur
    return false;
}

// Création d'un container
$container = Container::boot();

// Récupération et affichage de tout les articles
echo "<h2>Liste des articles</h2>";

$articles = $container->get(ArticleRepository::class)->findAll();

foreach ($articles as $article) {
    echo "<p>{$article->title}</p>";
}

// Récupération et affichage de tout les utilisateurs
echo "<h2>Liste des utilisateurs</h2>";

$users = $container->get(UserRepository::class)->findAll();

foreach ($users as $user) {
    echo "<p>{$user->firstname} {$user->lastname} ({$user->email})</p>";
}
