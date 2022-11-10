<?php

// On inclue l'autoload composer nous permettant d'utiliser nos classes

use App\Core\View;
use App\Core\Container;
use App\Table\UserTable;
use App\Core\Configuration;
use App\Table\ArticleTable;

require __DIR__ . '/../vendor/autoload.php';

// On test si l'on demande un fichier se terminant par les extensions suivante
if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {
    // On demande à PHP de ne pas se lancer. Ainsi ce sera le fichier
    // demandé qui sera retourné dans notre navigateur
    return false;
}

// Création du container
$container = Container::boot();

echo "<h2>Les utilisateurs</h2>";

// récupére tout les utilisateurs
$users = $container->get(UserTable::class)->findAll();

foreach ($users as $user) {
    echo "<p>{$user->email}</p>";
}

// J'aimerais afficher tout les articles !!

// 2. On récupére tout les articles
$articles = $container->get(ArticleTable::class)->findAll();

echo "<h2>Les Articles</h2>";

foreach ($articles as $article) {
    echo "<p>{$article->title}</p>";
}
