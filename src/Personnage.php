<?php

namespace App;

// 1. Récupérer les fichiers suivant:
//     - public/new-personnage.php
//     - src/Table/PersonnageTable.php
//     - src/Validateur/PersonnageValidateur.php
// 2. Ajouter des getters/setters pour toutes
//    les propriétés de Personnage
// 3. Retoucher la class src/Validateur/PersonnageValidateur.php
//    pour utiliser les getters/setters
// 4. Faire la même chose pour la class src/Table/PersonnageTable.php


class Personnage
{
    protected int $vie;

    protected int $attaque;

    protected int $magie;

    protected string $nom;

    public function __construct(
        string $nom,
        int $vie = 100,
        int $attaque = 20,
        int $magie = 30
    ) {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->magie = $magie;
    }

    public function regenerer(int $vie = 20): void
    {
        $this->vie += $vie;
    }

    public function afficher(): string
    {
        return "Nom: {$this->nom}, Vie: {$this->vie}, Attaque: {$this->attaque}";
    }

    public function attaque(Personnage $cible): void
    {
        $cible->vie -= $this->attaque;
    }

    public function soigne(Personnage $cible): void
    {
        $cible->regenerer($this->magie);
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getVie(): int
    {
        return $this->vie;
    }

    public function setVie(int $vie): void
    {
        $this->vie = $vie;
    }

    public function getAttaque(): int
    {
        return $this->attaque;
    }

    public function setAttaque(int $attaque): void
    {
        $this->attaque = $attaque;
    }

    public function getMagie(): int
    {
        return $this->magie;
    }

    public function setMagie(int $magie): void
    {
        $this->magie = $magie;
    }
}
