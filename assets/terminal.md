# Le Terminal (ou la ligne de commande)

Si vous souhaitez devenir hacker, ou simplement developpeur
web agérie il est obligatoire d'apprendre à utiliser un
terminal (ou ligne de commande) !

## Les commandes de base

Un terminal est ouvert dans un répertoire. Nous pouvons à l'aide
de commande manipuler notre ordinateur :

- `pwd` : (Print Working Directory) affiche le répertoire dans
  lequel vous vous situé
- `ls` : (list) affiche tout les fichiers et dossier du répertoire
  dans lequel on se trouve. Nous pouvons utiliser les options : `lah`
  afin d'afficher bien plus d'information (`ls -lah`)
- `clear` : Efface le contenu du terminal
- `cd` : (Change Directory) permet de changer de répertoire :
  - `cd nomDuRepertoire` : Se déplace dans un dossier
  - `cd ..` : Revenir dans le dossier parent
  - Vous pouvez utiliser la touche TAB pour autocompléter
- `mkdir` : (Make Directory) créer un nouveau dossier
- `touch` : (Toucher) créer un nouveau fichier vide
- `cp` : (Copy) copy / colle un fichier
- `mv` : (Move) déplace un fichier
- `rm` : (Remove) supprime un fichier ou un dossier
  - Pour supprimer un dossier il faut remplir un condition :
    Le dossier doit être vide !
  - Pour s'assurer et obliger rm à supprimer un dossier
    et ce qu'il contient il faut utiliser les options : 'rf'
    (ex: `rm -rf NomDossier`)

## Les binaires

Nous avons dans notre ordinateurs des programmes que l'on
nomme les « binaires ». Ces derniers sont de simple fichiers
écrit souvent dans un langage de programmation (JavaScript, Python,
C, C++ etc ...).

Ces programmes (ou fichiers) sont rangé dans répertoires spécifique
de notre système. Pour connaître ces répertoires il faut taper la
commande :

```sh
echo $PATH
```

## Utiliser php et composer

Lorsque l'on développe un programme dans un langage il faut
pouvoir le lancer (ou dit éxécuter le programme). Pour cela
il éxiste 2 grandes familles de langage de programmation :

### Les langages compilés :

Ce sont des langages que l'on vas « compilé » (transformer
en binaire (des 0 et des 1)).

Les avantages principaux :

- Se sont des langages très rapides

Les inconvénients :

- Se sont des langages plus difficile
- Ce n'est pas portable.

Les langages les plus cèlébre :

1. C++
2. C
3. Pascal
   (4. Python)
   (5. JavaScript)

### Les langages interprétés:

Ce sont des langages que l'on vas « interprété » (c'est un programme
de notre ordinateurs qui s'occupe de TOUT !)

Les avantages :

- Se sont des langages portable
- Se sont des langages plus facile

Les inconvénients :

- Se sont des langages plus lent

Les langages les plus cèlèbre :

1. Javascript
2. Python
3. PHP

### Utiliser php

Lorsque nous avons écrit un fichier php, il est possible de l'éxécuter
sur notre ordinateur sans passer par un navigateur. Pour cela
il suffit de lancer la commande :

```
php monScript.php
```

Il est possible de lancer un REPL, une console PHP :

```
php -a
```

> Vous pouvez appuyer sur CTRL-C pour quitter la console PHP

### Lancer votre propre Serveur !

Il est possible d'utiliser php pour lancer son propre serveur
web. C'est un petit programme en ligne (c'est à dire sur un addresse)
qui nous permet d'afficher et d'éxécuter du php pour le web.

```
php -S localhost:5353 -t .
```

> Vous pouvez appuyer sur CTRL-C pour quitter le serveur php

## Et composer ?

Composer c'est un petit outil qui permet de créer des projets
php maintenable, en utilisant l'orientée objet et permettant
de télécharger des librairie que d'autre utilisateurs php on créé.

### Initialiser composer

Afin d'utiliser composer et d'autre librairie PHP, il faut tout d'abord
l'initialiser. Pour cela :

```
composer init
```
