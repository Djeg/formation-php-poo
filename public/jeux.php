<?php

require_once 'Personnage.php';

/**
 * 1. Créer ou modifier la class Personnage
 *    pour contenir les propriétés suivantes :
 *    - int $vie
 *    - int $vieMaximum
 *    - int $attaque
 *    - int $attaqueMaximum
 *    - string $nom
 *    (RESPECTER L'ENCAPSULATION)
 * 
 * 2. Créer un constructeur qui accépte
 *    le paramètre suivant:
 *    - string $nom
 *    Ce constructeur initialise le nom
 *    du personnage ainsi que toutes les
 *    autres propriétés:
 *    - $vie = 100
 *    - $vieMaximum = 100
 *    - $attaque = 20 
 *    - $attaqueMaximum = 100
 * 
 * 3. Ajouter le getter pour la propritété $nom
 * 
 * 4. Ajouter un getter et un setter pour les propriétés
 *    suivantes:
 *    - $vie (attention la vie doit être entre 0 et $vieMaximum)
 *    - $attaque (attention l'attaque doit être en 1 et $attaqueMaximum)
 * 
 * 5. Ajouter une méthode "attaquer" qui accepte le paramètre suivant:
 *    - Personnage $cible
 *    Enléve le montant de l'attaque à la vie de la cible
 * 
 * 6. Ajouter une méthode regenerer qui accepte le paramètre suivant:
 *    - int $vie = 100
 *    Ajouter le montant de la vie à la vie du personnage
 * 
 * 7. Ajouter une méthode "estMort" qui retourne un boolean:
 *    - vrai si le personnage a 0 points de vie
 *    - faux si le personnage a plus de 0 points de vie.
 */


$arthur = new Personnage('Roi Arthur', 80, 40);
$merlin = new Personnage("Merlin l'enchanteur");
$morganne = new Personnage('Morganne la fée');

echo "Arthiur à {$arthur->getVie()} point de vie";

$arthur->setVie(180);

echo $arthur->afficher();
echo $merlin->afficher();
echo $morganne->afficher();

$arthur->attaquer($merlin);

echo $arthur->afficher();
echo $merlin->afficher(); // 30

$merlin->regenerer(10);

echo $arthur->afficher();
echo $merlin->afficher();
