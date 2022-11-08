<?php

// On inclue l'autoload composer nous permettant d'utiliser nos classes

use App\Core\Configuration;
use App\Core\View;
use App\Table\ArticleTable;
use App\Table\UserTable;

require __DIR__ . '/../vendor/autoload.php';

// On test si l'on demande un fichier se terminant par les extensions suivante
if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {
    // On demande à PHP de ne pas se lancer. Ainsi ce sera le fichier
    // demandé qui sera retourné dans notre navigateur
    return false;
}

// Créer une View
$view = new View(__DIR__ . '/../templates');

// Créer la configuration
$config = new Configuration(__DIR__ . '/..');

echo "<p>Est-ce que DATABASE_USER existe ?</p>";
echo "<p>{$config->has('DATABASE_USER')}</p>";

// Affiche le contenue de DATABASE_USER
echo $config->get('DATABASE_USER');

// Affiche le « template » (la page) hello.php
echo $view->render('hello', ['name' => 'John Doe']);

// Je souhaiterais récupérer tout les utilisateurs :
// 1. Se connécter à la base de données (créer un objet PDO
$pdo = new PDO(
    "mysql:host={$config->get('DATABASE_HOST')};
        port={$config->get('DATABASE_PORT')};
        dbname={$config->get('DATABASE_NAME')}",
    $config->get('DATABASE_USER'),
    $config->get('DATABASE_PASSWORD'),
);
// 2. Créer un objet UserTable
$table = new UserTable($pdo);
// 3. On appel la méthode findAll
$users = $table->findAll();

echo "<h2>Les utilisateurs</h2>";

foreach ($users as $user) {
    echo "<p>{$user->email}</p>";
}

// J'aimerais afficher tout les articles !!

// 1. Créer l'objet ArticleTable
$articleTable = new ArticleTable($pdo);

// 2. On récupére tout les articles
$articles = $articleTable->findAll();

echo "<h2>Les Articles</h2>";

foreach ($articles as $article) {
    echo "<p>{$article->title}</p>";
}
