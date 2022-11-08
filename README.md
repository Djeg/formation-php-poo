# Créer un site internet dynamique avec PHP orientée objet

Dans ce projet vous apprendrez toutes les techniques afin de mettre
en place un projet site internet dynamique robuste et en équipe !

Pour cela nous allons créer un simple blog. L'idée est de proposé
une page d'accueil affichant les derniers articles, une page pour les
articles et des pages réservé aux administrateurs pour lister, supprimer et
éditer des articles :).

## Installer le projet

### 1. Télécharger le projet sur votre machine

- Vous pouvez cloner le projet en utilisant git :

```
git clone https://github.com/Djeg/formation-php-poo.git
cd formation-php-poo
git checkout origin/session-projet/07-11-22/10-11-22
code .
```

- Vous pouvez sinon, télécharger le code [ici](https://github.com/Djeg/formation-php-poo/archive/refs/heads/session-projet/07-11-22/10-11-22.zip),
  ensuite extraire le projet ou vous le souhaitez et vous ouvrir le projet avec VSCode

### 2. Installer et mettre en place composer

Pour cela ouvrir le projet dans VSCode et lancer la commande :

```
composer install
```

### 3. Installer la base de données

Vous pouvez télécharger le base de données [ici](https://raw.githubusercontent.com/Djeg/formation-php-poo/session-projet/07-11-22/10-11-22/assets/blog_tutorial.sql) (clique droit : Enregistrer sous).

Vous avez plus qu'a insérer la base de données dans phpmyadmin :

![phpmyadmin](./assets/phpmyadmin.png)

### 4. Configurer l'application

Ouvrir le fichier `.env` et remplir avec vos valeurs de configuration

### 5. Lancer le serveur php

Toujours dans un terminal dans le projet, lancer la commande :

```
php -S localhost:11001 -t public public/index.php
```

## Les chapitres

1. [La mise en place](./assets/cours/mise-en-place.md)
2. [(MVC) La vue](./assets/cours/vue.md)
3. [(MVC) La configuration](./assets/cours/configuration.md)
4. [(MVC) Le Model](./assets/cours/model.md)
