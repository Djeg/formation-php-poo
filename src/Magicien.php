<?php

class Magicien extends Personnage
{
    public function soigne(Personnage $cible): void
    {
        parent::soigne($cible);

        $cible->regenerer(20);
    }
}
