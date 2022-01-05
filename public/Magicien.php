<?php

require_once 'Personnage.php';

class Magicien extends Personnage
{
    public function __construct(string $nom)
    {
        parent::__construct($nom);

        $this->attaque = $this->attaque + 10;
        $this->vie = $this->vie - 10;
    }
}
