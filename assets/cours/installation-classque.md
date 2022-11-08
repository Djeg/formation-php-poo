# Installer l'application (Méthode Classique)

Avant d'installer l'application assurez vous d'avoir les outils suivants
installé sur votre machine :

1. [MAMP](https://www.mamp.info/en/downloads/)
2. [Git](https://git-scm.com/download/win)
3. [Composer](https://getcomposer.org/download/)

## 1. Télécharger le projet

Il éxsiste 2 méthodes :

### 1.1 Utiliser git et la ligne de commande :

```
git clone https://github.com/Djeg/formation-php-poo.git
cd formation-php-poo
git checkout origin/session-projet/07-11-22/10-11-22
code .
```

### 1.2 Téléchargement classique :

Vous pouvez sinon, télécharger le code [ici](https://github.com/Djeg/formation-php-poo/archive/refs/heads/session-projet/07-11-22/10-11-22.zip),
ensuite extraire le projet ou vous le souhaitez et vous ouvrir le projet avec VSCode

## 2. Installer et mettre en place composer

Pour cela ouvrir le projet dans VSCode et lancer la commande :

```
composer install
```

## 3. Installer la base de données

Vous pouvez télécharger le base de données [ici](https://raw.githubusercontent.com/Djeg/formation-php-poo/session-projet/07-11-22/10-11-22/assets/blog_tutorial.sql) (clique droit : Enregistrer sous).

Vous avez plus qu'a insérer la base de données dans phpmyadmin :

![phpmyadmin](./assets/phpmyadmin.png)

## 4. Configurer l'application

Ouvrir le fichier `.env` et remplir avec vos valeurs de configuration

## 5. Lancer le serveur php

Toujours dans un terminal dans le projet, lancer la commande :

```
php -S localhost:11001 -t public public/index.php
```
