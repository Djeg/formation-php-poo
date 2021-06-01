<?php

class Personnage
{
    public int $vie = 100;

    public int $attaque = 20;

    public int $magie = 30;

    public function regenerer(int $vie = 20): void
    {
        $this->vie = $this->vie + $vie;
    }

    public function afficher(): string
    {
        return "Vie: {$this->vie}, Attaque: {$this->attaque}";
    }

    public function attaque(Personnage $cible): void
    {
        $cible->vie = $cible->vie - $this->attaque;
    }
}
