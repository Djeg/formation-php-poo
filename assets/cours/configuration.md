# La configuration

Depuis le début des annèes 2000, toutes les applications, sans exception utilise
un format de configuration universel : les variables d'environement.

## 1. Créer nos variables d'environement

Pour créer ses propre variables d'environement, il suffit de créer un fichier `.env` à la racine
de notre projet.

Ce fichier vas contenir toutes les variables d'environement dont à besoin notre application
pour fonctionner (exemple : La configuration de la base de données).

Voici ce que nous allons mettre dans le fichier .env

```
DATABASE_HOST=localhost
DATABASE_PORT=3306
DATABASE_NAME=blog
DATABASE_USER=root
DATABASE_PASSWORD=root
```

## 2. Récupérer des variables d'environement en PHP

PHP est un langage assez « ancien », il ne supporte pas les variables d'environement. Mais
par contre, grâce à composer, il est possible d'installer une librairie nous permettant de
lire nos variables d'environement. Pour cela il suffit de lancer la commande suivante :

```
composer require vlucas/phpdotenv
```

## 3. Créer la class « Configuration »

Le principe de cette classe et de retourner des valeurs contenue dans nos variables d'environement.
Elle doit être utilisé comme ceci :

```php
<?php

use App\Core\Configuration;

$config = new Configuration(__DIR__ . '/..');

// Tester si une configuration éxsiste :
$config->has('DATABASE_HOST');  // true

// Récupére une valeur de configuration
$user = $config->get('DATABASE_USER'); // root

// Attention, notre objet doit retourner une erreur
// si la valeur n'éxsiste pas
$test = $config->get('VALEUR_INCONNUE'); // ERREUR !!
```

Cette classe « Configuration » devra se situé dans le repertoire : `src/Core`.

Dans le constructeur de la class, nous devons spécifier le dossier dans lequel
se situe notre fichier `.env`.

Il faudra alors utiliser la librairie php « vlucas/phpdotenv » afin
de lire les variables d'environement :

```php
use Dotenv\Dotenv;

// Lie et obtient les variables d'environement
Dotenv::createImmutable(__DIR__)->load();

// Pour lire une variable environement il suffit d'utiliser
// la superglobal $_ENV :
$_ENV['DATABASE_HOST']; // mysql
```

Pour résumé, le code plus haut devra être présent dans le constructeur de
notre objet « Configuration ».
