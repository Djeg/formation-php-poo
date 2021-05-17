<?php

class Magician extends Personnage
{
    public function afficher(): void
    {
        echo 'Le magicien ';

        parent::afficher();
    }

    public function attaquer(Personnage $cible): void
    {
        parent::attaquer($cible);

        $cible->vie -= 20;
    }
}
