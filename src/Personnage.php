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
        echo $this->nom
            . ' a '
            . $this->vie
            . ' de vie et '
            . $this->attaque
            . ' d\'attaque';
    }

    public function attaquer(Personnage $victim): void
    {
        echo $this->nom . ' attaque ' . $victim->nom . ' !';
        echo '<br />';

        $victim->vie = $victim->vie - $this->attaque;
    }
}
