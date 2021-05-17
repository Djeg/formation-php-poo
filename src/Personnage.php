<?php

class Personnage
{
    public int $vie = 100;

    public int $attaque = 20;

    private string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function regenerer(int $vie = 100): void
    {
        $this->vie = $this->vie + $vie;
    }

    public function attaquer(Personnage $cible): void
    {
        $cible->vie = $cible->vie - $this->attaque;
    }

    public function afficher(): void
    {
        echo $this->nom
            . ' a '
            . $this->vie
            . ' points de vie et '
            . $this->attaque
            . ' en attaque.';
    }
}
