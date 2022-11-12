<?php


// Nous incluons l'autoload de composer

use App\Core\Configuration;
use App\Repository\ArticleRepository;
use App\Repository\UserRepository;

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

// Création d'un objet PDO
$pdo = new PDO(
    "mysql:host={$config->get('DATABASE_HOST')};
        port={$config->get('DATABASE_PORT')};
        dbname={$config->get('DATABASE_NAME')}",
    $config->get('DATABASE_USER'),
    $config->get('DATABASE_PASSWORD'),
);

// Création des repository User et Article
$articleRepository = new ArticleRepository($pdo);
$userRepository = new UserRepository($pdo);

// Récupération et affichage de tout les articles
echo "<h2>Liste des articles</h2>";

$articles = $articleRepository->findAll();

foreach ($articles as $article) {
    echo "<p>{$article->title}</p>";
}

// Récupération et affichage de tout les utilisateurs
echo "<h2>Liste des utilisateurs</h2>";

$users = $userRepository->findAll();

foreach ($users as $user) {
    echo "<p>{$user->firstname} {$user->lastname} ({$user->email})</p>";
}
