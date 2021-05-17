<?php

class Personnage
{
    public int $vie = 100;

    public int $attaque = 20;

    public string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function regenerer(int $vie = 100): void
    {
        $this->vie = $vie;
    }

    public function afficher(): void
    {
        echo 'Le personnage a '
            . $this->vie
            . ' de vie et '
            . $this->attaque
            . ' d\'attaque';
    }

    public function attaquer(Personnage $victim): void
    {
        $victim->vie = $victim->vie - $this->attaque;
    }
}
