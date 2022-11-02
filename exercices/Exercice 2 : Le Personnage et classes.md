# Exercice 2

En reprenant le code de l'exercice 1,
faire en sorte de :

## 1. Créer une fonction de soin

Créer une méthode "heal" qui accépte un paramètre (un entier
spécifiant le montant que l'on dois soigner).

Cette méthode ajoute à la vie de notre personnage le montant
spécifié en paramètre :

```php
// $arthur->vie === 70;
$arthur->heal(10); // Soigne de 10 points de vie : 80
```

> ATTENTION ! La vie ne peut pas descendre en dessous de 0
> et monter au dessus de la vie maximum

## 2. Créer une fonction d'attaque !

Créer une méthode "hit" qui accépte un paramètre (un autre
Personnage représentant l'enemie, la victime ou la cible).

Cette méthode retire de la vie de la cible le montant de l'attaque
du personnage.

```php
// Merlin : 50pv, 30atk
// Arthur : 100pv, 10atk

$arthur->hit($merlin);

// Merlin : 40pv, 30atk
// Arthur : 100pv, 10atk

$merlin->hit($arthur);

// Merlin : 40pv, 30atk
// Arthur : 70pv, 10atk
```

## 3. Créer un guerrier !

Créer une classe « Warrior » qui hérite de la class Character.

Cette classe possède une nouvelle méthode : charge

Cette méthode est similaire a l'attaque par contre elle vas aussi
diminuer de 5 l'attaque de l'adversaire.

```php
// Merlin : 50pv, 30atk
// Arthur : 100pv, 10atk

$arthur->charge($merlin);

// Merlin : 40pv, 25atk
// Arthur : 100pv, 10atk
```

## 4. Créer un magicien !

Créer une classe « Magician » qui hérite de la class Character.

Cette classe possède une nouvelle méthode : charm

Cette méthode enléve à l'attaque de l'adversaire le montant
de l'attaque du personnage et rend 10 point de vie !

```php
// Merlin : 50pv, 30atk
// Arthur : 100pv, 10atk

$merlin->charm($arthur);

// Merlin : 60pv, 30atk
// Arthur : 100pv, 0atk
```
