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

    private int $attaque;

    private string $nom;

    public function __construct(string $nom, int $vie = 100, int $attaque = 20)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
    }

    public function setVie(int $vie): void
    {
        $this->vie = $vie;

        if ($this->vie < 0) {
            $this->vie = 0;
        }

        if ($this->vie > 100) {
            $this->vie = 100;
        }
    }

    public function getVie(): int
    {
        return $this->vie;
    }

    public function attaquer(Personnage $cible): void
    {
        $cible->vie -= $this->attaque;
    }

    public function regenerer(int $vie = 100): void
    {
        $this->setVie($this->vie + $vie);
    }

    public function afficher(): string
    {
        return "<p><strong>{$this->nom}</strong> - Vie: {$this->vie}, Attaque: {$this->attaque}</p>";
    }
}
