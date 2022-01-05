<?php

/*
Dans une classe nous aurons dans l'ordre, les parties
les plus importante au parties les moins importantes:

1. Propriétés (public)
2. Propriétés (protected)
3. Propriétés (private)

4. Constructeur ! 

5. les méthodes (public): Mettre les getters et setters à la suite !
6. les méthodes (protected)
7. les méthodes (private)
*/

// ENCAPSULATION: TOUTES LES PROPRIÉTÉS D'UN OBJET DOIVENT ETRE
//                PRIVATE OU PROTECTED (POUR RENDRE LES OBJET IMMUABLE)
// GETTER ET SETTERS: LE GETTER PERMET DE RECUPERER UNE PROPRIETE PRIVATE / PROTECTED.
//                    LE SETTER PERMET DE CHANGE UNE PROPRIETE PRIVATE / PROTECTED.
class Personnage
{
    private int $vie;

    private int $vieMaximum;

    private int $attaque;

    private int $attaqueMaximum;

    private string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->vie = 100;
        $this->vieMaximum = 100;
        $this->attaque = 20;
        $this->attaqueMaximum = 100;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setVie(int $vie): void
    {
        $this->vie = $vie;

        if ($this->vie < 0) {
            $this->vie = 0;
        }

        if ($this->vie > $this->vieMaximum) {
            $this->vie = $this->vieMaximum;
        }
    }

    public function getVie(): int
    {
        return $this->vie;
    }

    public function setAttaque(int $attaque): void
    {
        $this->attaque = $attaque;

        if ($this->attaque < 1) {
            $this->attaque = 1;
        }

        if ($this->attaque > $this->attaqueMaximum) {
            $this->attaque = $this->attaqueMaximum;
        }
    }

    public function getAttaque(): int
    {
        return $this->attaque;
    }

    public function attaquer(Personnage $cible): void
    {
        $cible->setVie($cible->vie - $this->attaque);
    }

    public function regenerer(int $vie = 100): void
    {
        $this->setVie($this->vie + $vie);
    }

    public function estMort(): bool
    {
        if ($this->vie === 0) {
            return true;
        } else {
            return false;
        }
    }
}
