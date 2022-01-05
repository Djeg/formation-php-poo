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
/**
 * Plan de construction d'un personnage du jeux
 */
class Personnage
{
    protected int $vie;

    protected int $vieMaximum;

    protected int $attaque;

    protected int $attaqueMaximum;

    protected string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->vie = 100;
        $this->vieMaximum = 100;
        $this->attaque = 20;
        $this->attaqueMaximum = 100;
    }

    /**
     * Retourne la propriété privée "$nom"
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Change la vie du personnage en lui specifiant
     * le montant de la nouvelle vie. Cette vie ne peut
     * pas descendre en dessous de 0 ou de monter au
     * dessus de la vie maximal du personnage.
     */
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

    /**
     * Change l'attaque du personnage. Attention,
     * l'attaque ne peut pas descendre en dessous de 1
     * et monter au dessus de l'attaque maximal du personnage.
     */
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

    /**
     * Attaque le personnage cible en lui retirant
     * l'attaque du personnage.
     */
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
        return $this->vie === 0;
    }
}
