<?php

namespace App;

class Chevalier extends Personnage
{
    public function attaque(Personnage $cible): void
    {
        parent::attaque($cible);

        $cible->vie -= 20;
    }
}
