<?php

class Magician extends Personnage
{
    public function castSpell(Personnage $victim): void
    {
        $victim->vie = 10;
    }

    public function attaquer(Personnage $victim): void
    {
        parent::attaquer($victim);

        $victim->vie = $victim->vie - 10;
    }
}
