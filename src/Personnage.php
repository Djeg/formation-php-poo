<?php

class Personnage
{
    public int $vie;

    public int $attaque;

    public string $nom;

    public function __construct(string $nom, int $vie, int $attaque)
    {
        $this->nom = $nom;
        $this->attaque = $attaque;
        $this->vie = $vie;
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
