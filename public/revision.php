<?php

/**
 * echo nous permet d'afficher un membre sur notre page
 */
echo 'Hello';

/**
 * Une variable est une donnée que l'on conserve en mémoire.
 * 
 * Une variable contient un identifiant ici "$name" et 
 * une valeur: ici "John"
 */
$name = 'John';

/**
 * En php et dans tout les autres language de programmation,
 * les valeurs possèdent un type:
 * 
 * Exemple:
 */
$surname = 'Johnny'; // Une variable $surname de type « string »
$age = 34; // Une variable $age de type « int »
$price = 34.54; // Une variable $price de type « float »
$isMajor = true; // Une variable $isMajor de type « bool »

/**
 * En php il exsiste un type complexe: les arrays (les tableaux)
 */
$friends = ['Jane', 'Fred'];

/**
 * Pour accéder à 1 élément d'un tableaux on utilise des « index », ils
 * commencent tous par 0 (et non 1)
 */
$fred = $friends[1];

echo $fred;

/**
 * Il est possible de réaliser des conditions en PHP
 */
if ($age < 18) {
    echo 'Vous n\'êtes pas majeur';
} else {
    echo 'Vous êtes majeur';
}

/**
 * Pour faire des conditions il existe des opérateurs logique:
 * 
 * Le « ET » : &&
 * Le « OU » : ||
 * Le « EST EGALE À » : ===
 * Le « EST SUPÉRIEUR À » : >
 * Le « EST INFÉRIEUR À » : <
 * Le « EST SUPÉRIEUR OU EGAL À » : >=
 * Le « EST INFÉRIEUR OU EGAL À » : <=
 */
if ($age >= 18 && $name === 'Jane') {
    echo 'Et salut jane je te connais !';
}

/**
 * En php il existe la possibilité des « variées » notre
 * code en fonctions des valeurs d'une variables
 */
$name = 'John';

switch ($name) {
    case 'John':
        echo 'salut John';
        break;
    case 'Jane':
        echo 'Hey Jane !';
        break;
    case 'Johnny':
        echo 'Yo Johny';
        break;
    default:
        echo 'Salut';
}

/**
 * En php il est possible de « boucler » sur les index et les valeurs
 * d'un tableaux (array)
 */
$books = ['Martinne à la plage', 'Game of thrones'];

foreach ($books as $index => $book) {
    echo $index; // Affiche 0, Affiche 1
    echo $book; // Affiche "Martinne à la plage", Affiche "Game of thrones"
}

/**
 * LES FONCTIONS
 */

/**
 * Une fonction accépte des paramètres et retourne ou non une valeur
 */
function add($x, $y)
{
    $result = $x + $y;

    return $result;
}


echo '<br />';
echo add(3, 4);

echo '<br />';
echo add(2, 3);

echo '<br />';
echo add(6, 8);

/**
 * Un éxemple plus parlant !
 */
function input($name, $type = 'text')
{
    echo '<input type="' . $type . '" name="' . $name . '" />';
}

input('email');
