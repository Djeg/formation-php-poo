# La Vue

Dans un modèle MVC, la vue est tout ce que l'utilisateur voit à l'écran.
Dans notre cas, ce sera du HTML et CSS.

Un fichier php avec du HTML à l'intérieur, est nommé un « template » (gabarit).
Ces « template » peuvent être afiiché à l'écran en utilisant l'objet de
la class « View ».

Cette classe à pour unique rôle, d'afficher un « template » php

## 1. Créer notre premier « template »

Nous allons tout d'abord créer un dossier « templates » à la racine de notre
projet. Ce dossier vas contenir tout les « templates » (pages).

Nous allons créer un premier template très simple : "hello.php"

```php
<h1>Hello <?= $name ?></h1>
```

## 2. Créer la classe « View »

Cette classe vas permettre d'afficher sur notre navigateur le contenu
d'un templates. Cependant les templates sont rangée dans un dossier. Il faudra
au préalable spécifier le chemin de ce dossier dans son constructeur.

Cette classe possède une seul méthode : **render**. Son fonctionnement est assez
simple, nous lui donnons le nom du template à afficher ainsi qu'un tableaux de
variables et la méthode retournera une chaine de caractère contenant l'intégralité
du fichier php compilé.

Cette classe vas être rangé dans le répertoire `src`, mais attention nous allons
créer un autre répertoire dans `src` : `Core` (noyau). Ce répertoire `Core` contiendra
toutes les classes nescessaire au bon fonctionnement de notre MVC.

À l'aide des fonctions suivantes :

- [`file_exists`](https://www.php.net/manual/en/function.file-exists.php) : Test si un fichier éxiste
- [`ob_start`](https://www.php.net/manual/fr/function.ob-start.php) : Démarre un « Buffer » d'affichage. Pour résumé lorsque l'on vas faire un « echo » ce dernier ne s'affichera pas à l'écran mais sera écrit dans la mémoire (dans un Buffer).
- [`extract`](https://www.php.net/manual/fr/function.extract) : Permet de créer des variables en fonction des clés d'un tableaux.
- [`include`](https://www.php.net/manual/fr/function.include.php) : Nous allons inclure le fichier template demandé.
- [`ob_get_clean`](https://www.php.net/manual/fr/function.ob-get-clean) : récupére tout ce qui était affiché (echo).

Exemple d'utilisation de la class View :

```php

use App\Core\View;

$view = new View(__DIR__ . '/../templates');

echo $view->render('hello', ['name' => 'John Doe']);

```

Vous pouvez tester cette objet vue à l'intérieur du frontend controller : `public/index.php`.
