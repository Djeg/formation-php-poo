<?php

class Personnage
{
    public int $vie = 100;

    public int $attaque = 20;

    public string $nom;

    public function __construct(string $nom, int $vie = 100, int $attaque = 20)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
    }

    public function afficher(): string
    {
        return "<p><strong>{$this->nom}</strong> - Vie: {$this->vie}, Attaque: {$this->attaque}</p>";
    }

    public function attaquer(Personnage $cible): void
    {
        $cible->vie -= $this->attaque;
    }

    public function regenerer(int $vie = 100): void
    {
        $this->vie += $vie;

        if ($this->vie > 100) {
            $this->vie = 100;
        }
    }
}
