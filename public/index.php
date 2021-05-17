<?php

require_once '../src/Personnage.php';
require_once '../src/Magician.php';

$merlin = new Magician('Merlin', 100, 40);
$arthur = new Personnage('Arthur', 100, 10);

$merlin->afficher();

echo '<br />';

$arthur->afficher();

echo '<br />';

$arthur->attaquer($merlin);
$merlin->castSpell($arthur);
$merlin->attaquer($arthur);

$merlin->setName('Merlin le maginifique');

$merlin->afficher();

echo '<br />';

$arthur->afficher();

// Exemple encapsulation Voiture

/*
$audi = new Voiture('audi', 'white');

// Sans encapsulation, nous pouvons changer chaques pièces
// individuellement.
// Cependant, rien ne assure que notre voiture fonctionne :/
$audi->moteur = new Moteur('super moteur 88');
// $audi->embrayage = new Embrayage(...);


// Avec l'encapsulation, nous pouvons changer l'embrayage dans
// la méthode "changeMoteur", de cette manière nous sommes
// sur et certains que notre voiture fonctionne.
$audi->changeMoteur(new Moteur('super moteur 88'))


class Voiture
{
    public function changeMoteur(Moteur $moteur): void
    {
        $this->moteur = $moteur;
        $this->embrayage = new Embrayage(...);
    }
}
*/
